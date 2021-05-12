<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ClassModel;

class Result extends BaseController 
{
	function checkResult()
	{
		$class = new ClassModel();
		$icl = $class;
		$data = [
			'title'	=>	'Online e-Result Portal',
			'page'	=>	'result',
			'class'	=>	$class->findAll()
		];
		if ($this->request->getMethod() == 'post') {
			$req = $this->request;

			$cardPin 	= 	$req->getPost('pin');
			$serial_no 	= 	$req->getPost('serial');
			$studentId 	= 	$req->getPost('userId');
			$class 		= 	$req->getPost('class');
			$section 	= 	$req->getPost('section');
			$term 		= 	$req->getPost('term');
			
			$resp = $this->checkUsage($cardPin, $studentId);
			if($resp == true){
				$rdata['result'] = $this->results->where('student_id', $studentId)->where('class_id', $class)->where('section', $section)->where('term', $term)->join('subjects', 'subjects.id=result.subject_id')->findAll();
				$inc = 1;
				$this->card->set('card_usage', "card_usage+".$inc, FALSE)->where('pin', $cardPin)->update();
				$this->card->set('studentId', $studentId)->where('pin', $cardPin)->update();
				$rdata['section'] = $section;
				$rdata['class'] = $icl->where('id', $class)->first();
				$rdata['sid'] = $this->studentinfo($studentId);
				return view('users/getresult', $rdata);
			} else {
				return redirect()->back()->with('error', "Invalid Card or Card as reach maximum number of usage, Please contact Administrator.");
			}
		}

		return view('users/check', $data);
	}
	
	function checkUsage($cardPin, $studentId) {
		// check card usage
		$usage	=	$this->card->where('pin', $cardPin)->first();
		if ($usage['card_usage'] <= conf['maxcardusage']) {
			// now check if card usage is linked to a student.
			if (($usage['studentId'] != null && $usage['studentId'] == $studentId) || $usage['studentId'] == null) {
				return true;
			} else {
				return false;
			}
		} elseif($usage < conf['maxcardusage']) {
			return TRUE;
		}elseif($usage >= conf['maxcardusage']) {
			return FALSE;
		} elseif($usage['studentId'] == null){
			return TRUE;
		}
	} 

	function cardGenerator()
	{
		$data = [
			'title'		=>	'Generate Result e-Card',
			'page'		=>	'e-card',
		];
		if ($this->request->getMethod() == 'post') {
			$qty = $this->request->getPost('quantity');
			$limit = $qty;

			$i = 1;
			while ($i <= $qty+1) {
				$this->generator();
				$i++;
			}
			
			$rdata['result']	=	$this->card->orderBy('created_at', 'DESC')->findAll($limit);
			$rdata['page']	=	'pins';
			$rdata['title']	=	'Generated e-Pins';
			return view('admin', $rdata);
		}
		return view('admin', $data);
	}

	private function generator()
	{
		$serial = $this->serial();
		$pin 	= $this->pin();
		$data = [
			'pin'		=>	$pin,
			'serial'	=>	$serial,
		];
		$insert = $this->card->insert($data);
		if ($insert) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	private function pin()
	{
		$gen = $num = str_pad(mt_rand(1,99999999),12,'0',STR_PAD_LEFT);
		return $gen;
	}

	private function serial()
	{
		$prefix = conf['cardprefix'];
		$gen = $num = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
		$gen = $prefix.$gen;
		return $gen;
	}

	private function studentinfo($studentId)
	{
		$student = $this->db->query("SELECT * FROM students WHERE student_id='{$studentId}' ")->getResultArray();
		return $student;
	}

	function test()
	{
		$user = new UserModel();
		$user = $user->where('id',1)->first();
		$user = array_filter(array_unique($user));
		foreach ($user as $k => $v) {
			echo $k.': '. $v.'<br>';
		}
		//print_r($user);
	}

	function r(){
		return view('users/result');
	}

}