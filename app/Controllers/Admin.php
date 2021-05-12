<?php namespace App\Controllers;

use App\Models\ClassModel;
use App\Models\SettingsModel;
use App\Models\UserModel;
use App\Models\ResultModel;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Control Panel',
            'page' => 'dashboard',
        ];
        return view('admin', $data);
    }

    public function dashboard()
    {
        return redirect()->to(base_url('admin/'));
    }

    function e_pins()
    {
        $data = [
            'title'     =>  'e-Pins',
            'page'      =>  'pins',
        ];
        return view('admin', $data);
    }

    public function add()
    {
        $model = new UserModel();
        $data = [
            'title' => 'Add New Employee',
            'page' => 'add',
        ];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => "required|valid_email|is_unique[users.email]",
                'firstname' => 'required',
                'lastname' => 'required',
                'role' => 'required',
                'password' => 'required|min_length[3]|max_length[50]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $req = $this->request;
                $firstname = $req->getPost('firstname');
                $lastname = $req->getPost('lastname');
                $email = $req->getPost('email');
                $role = $req->getPost('role');
                $password = $req->getPost('password');

                $eData = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'role' => $role,
                    'password' => $password,
                    'created_at' => date('M, d Y'),
                ];

                $sData = $model->save($eData);
                if ($sData) {
                    return redirect()->back()->with('success', $lastname . " added succesfully");
                } else {
                    return redirect()->back()->with('error', 'Error while adding ' . $lastname);
                }
            }
        }
        return view('admin', $data);
    }

    function class ()
    {
        $class = new ClassModel();
        $data = [
            'title' => 'Manage Classes',
            'page' => 'class',
            'class' => $this->db->query("SELECT c.id as c_id, c.name as c_name, c.class_teacher as c_teach, u.firstname as firstname, u.lastname as lastname from class c JOIN users u ON c.class_teacher=u.id")->getResultArray(),
            'teacher' => $this->users->where('role', 'staff')->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getPost('class');
            $teacher = $this->request->getPost('teacher_id');

            $pdata = [
                'name' => $name,
                'class_teacher' => $teacher,
            ];

            $insert = $class->save($pdata);
            if ($insert) {
                return redirect()->back()->with('success', $name . " added succesfully");
            } else {
                return redirect()->back()->with('error', 'Error while adding ' . $name);
            }
        }

        return view('admin', $data);
    }

    public function employee($action = null, $id = null)
    {
        $model = new UserModel();
        $data = [
            'title' => 'Employee List',
            'page' => 'employee',
            'empl' => $model->findAll(),
        ];
        if ($action == 'delete') {
            $del = $model->where('id', $id)->delete();
            if ($del) {
                return redirect()->back()->with('success', "Employee deleted succesfully");
            } else {
                return redirect()->back()->with('success', 'Error while deleting employee');
            }
        }
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => "required|valid_email|is_unique[users.email]",
                'firstname' => 'required',
                'lastname' => 'required',
                'role' => 'required',
                'password' => 'required|min_length[3]|max_length[50]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $req = $this->request;
                $firstname = $req->getPost('firstname');
                $lastname = $req->getPost('lastname');
                $email = $req->getPost('email');
                $role = $req->getPost('role');
                $password = $req->getPost('password');

                $eData = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'role' => $role,
                    'password' => $password,
                    'created_at' => date('M, d Y'),
                ];

                $sData = $model->save($eData);
                if ($sData) {
                    return redirect()->back()->with('success', $lastname . " added succesfully");
                } else {
                    return redirect()->back()->with('success', 'Error while adding ' . $lastname);
                }
            }
        }
        return view('admin', $data);
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
            'page' => 'upload_result',
        ];

        if ($this->request->getMethod() == 'post') {
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
                            $importData_arr[$i]["grade"]        = $filedata[1];
                            $importData_arr[$i]["ca_one"]       = $filedata[2];
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
                        if ($checkrecord == 0) {
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

        return view('admin', $data);
    }

    /*
     *  check if database column/table exists
     *
     */

    public function add_course($action = null, $subject = null)
    {

        $data = [
            'title' => 'Add New Subject',
            'page' => 'add-subject',
            'teacher' => $this->users->where('role', 'staff')->findAll(),
            'subjects' => $this->db->query("SELECT * FROM subjects as s join users as u on s.teacher_id=u.id")->getResultArray(),
        ];
        // firstly check if Column exit in ::DB
        if ($this->request->getMethod() == 'post') {
            $subject = $this->request->getPost('subject');
            $teacher = $this->request->getPost('teacher_id');
            $checkTable = $this->db_column($subject); //check if column exist in the result database table

            if ($checkTable) {
                return redirect()->back()->with('error', 'Subject Already exist in Database');
            } else {
                // insert subject into ::DB and create the column.
                $subject = strtolower($subject);
                $subject_query = "INSERT INTO subjects (subject_name, teacher_id) VALUES ('{$subject}', '{$teacher}')";
                // $addTable = "ALTER TABLE result ADD $subject VARCHAR( 500 ) AFTER class";

                $this->db->transStart();
                $this->db->query($subject_query);
                // $this->db->query($addTable);
                $compl = $this->db->transComplete();

                if ($compl) {
                    return redirect()->back()->with('success', 'Subject Added Succesfully');
                } else {
                    return redirect()->back()->with('error', 'Error while adding subject');
                }
            }
        }

        if ($action == 'delete') {
            $subject = strtolower($subject);
            $subject_query = "DELETE FROM subjects WHERE subject_name='{$subject}'";
            // $dropTable = "ALTER TABLE result DROP COLUMN $subject";

            $this->db->transStart();
            $this->db->query($subject_query);
            // $this->db->query($dropTable);
            $compl = $this->db->transComplete();

            if ($compl) {
                return redirect()->back()->with('success', 'Subject Deleted Succesfully');
            } else {
                return redirect()->back()->with('error', 'Error while deleting subject');
            }
        }

        return view('admin', $data);
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


    /*
     * Website settings configuration
     */

    function settings()
    {
        $data = [
            'title' =>  'Website Settings',
            'page'  =>  'settings'
        ];

        if ($this->request->getMethod() == 'post') {
            $req = $this->request;
            $fileName = $_FILES['logo']['name'];
            $path = move_uploaded_file($_FILES['logo']['tmp_name'], FCPATH.'uploads/'.$fileName);
            $sdata = [
                'id'    =>  '1',
                'logo'              =>  $fileName,
                'cur_term'          =>  $req->getPost('cur_term'),
                'site_title'        =>  $req->getPost('site_title'),
                'site_email'        =>  $req->getPost('site_email'),
                'address'           =>  $req->getPost('address'),
                'phone'             =>  $req->getPost('phone'),
                'cardprefix'        =>  $req->getPost('cardprefix'),
                'maxcardusage'      =>  $req->getPost('maxcardusage'),
                'next_term_begin'   =>  $req->getPost('next_term_begin'),
                'next_term_ends'    =>  $req->getPost('next_term_ends'),
            ];

            $settings = new SettingsModel();
            $insert = $settings->set($sdata)->where('id', 1)->update();
            if ($insert) {
                return redirect()->back()->with('success', "Settings updated succesfully");
            } else {
                return redirect()->back()->with('error', 'Error while updating settings');
            }
        }

        return view('admin', $data);
    }
}
