<?php namespace App\Controllers;

use App\Models\ClassModel;
use App\Models\Employee;
use App\Models\UserModel;
use App\Models\ResultModel;

class Dashboard extends BaseController
{
    public function index()
    {
        return redirect()->to(base_url('dashboard/'));
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Control Panel',
            'page' => 'dashboard',
        ];
        return view('index', $data);
    }

    public function students()
    {
        $data = [
            'title'     =>      'All Students',
            'page'      =>      'students',
            'students'  =>      $this->db->query("SELECT * FROM students")->getResultArray()
        ];

        return view('index', $data);
    }

    public function subjects()
    {
        $data = [
            'title'     =>      'All Students',
            'page'      =>      'subjects',
            'subjects'  =>      $this->db->query(" SELECT * FROM subjects WHERE teacher_id=$this->user_id ")->getResultArray()
        ];

        return view('index', $data);
    }

    public function results()
    {
        $data = [
            'title' => 'View Student Result',
            'page' => 'all_results',
            'subject' => ['a' => 'b', 'c' => 'd'],
        ];

        return view('admin', $data);
    }

    public function upload_results()
    {
        $data = [
            'title' => 'upload student Results',
            'page' => 'upload_results',
            'subject'   =>  $this->db->query("SELECT * FROM subjects WHERE teacher_id=$this->user_id")->getResultArray()
        ];

        if ($this->request->getMethod() == 'post') {
            $subject = $this->request->getPost('subject_id');
            if ($file = $this->request->getFile('userfile')) {
                if (!$file->hasMoved()) {
                    // Get random file name
                    $newName = $file->getRandomName();
                    // Store file in public/results/ folder
                    $file->move('../public/results', $newName);
                    // Reading file
                    $file = fopen("../public/results/" . $newName, "r");
                    $i = 0;
                    $numberOfFields = 13; // Total number of fields
                    $importData_arr = array();
                    // Initialize $importData_arr Array
                    while (($filedata = fgetcsv($file, 1000, ",")) !== false) {
                        $num = count($filedata);
                        // Skip first row & check number of fields
                        if ($i > 0 && $i < $num) {
                            // Key names are the insert table field names - name, email, city, and status
                            $importData_arr[$i]['student_id']   = $filedata[0];
                            $importData_arr[$i]['grade']        = $filedata[1];
                            $importData_arr[$i]['ca_one']       = $filedata[2];
                            $importData_arr[$i]['ca_two']       = $filedata[3];
                            $importData_arr[$i]['exam']         = $filedata[4];
                            $importData_arr[$i]['total']        = $filedata[5];
                            $importData_arr[$i]['subject_pos']  = $filedata[6];
                            $importData_arr[$i]['class_avg']    = $filedata[7];
                            // $importData_arr[$i]['subject_id']   = $subject;
                            $importData_arr[$i]['subject_id']   = $filedata[8];
                            $importData_arr[$i]['class_id']     = $filedata[9];
                            $importData_arr[$i]['term']         = $filedata[10];
                            $importData_arr[$i]['section']      = $filedata[11];
                            $importData_arr[$i]['remark']       = $filedata[12];
                        }
                        $i++;
                    }
                    fclose($file);

                    // Insert data
                    $count = 0;
                    foreach ($importData_arr as $userdata) {
                        $result = new ResultModel();
                        // Check record
                        $checkrecord = $result->where('student_id', $userdata['student_id'])->countAllResults();
                        if ($checkrecord ) {
                            ## Insert Record
                            if ($result->insert($userdata)) {
                                $count++;
                            }
                        }

                    }
                    // Set Session
                    return redirect()->back()->with('success', $count . ' Record inserted successfully!');
                } else {
                    // Set Session
                    return redirect()->back()->with('error', 'File import failed.');
                }
            } else {
                // Set Session
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }

        return view('index', $data);
    }

    /*
     *  check if database column/table exists
     *
     */
    public function db_column($table_name)
    {
        if ($this->db->fieldExists($table_name, 'result')) {
            return true;
        } else {
            return false;
        }
    }

}