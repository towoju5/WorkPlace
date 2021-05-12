<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController 
{
	public function index()
	{
		return view('home');
	}

	public function login()
	{
		$this->logged();
        $ldata   =   [
			'title'	=>	'Control Panel',
			'page'	=>	'login'
		];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password'  => 'required|min_length[3]|max_length[50]|ValidateUser[eamil,password]'
            ];

            $errors =   [
                'password'  =>  [
                    'ValidateUser'  =>  'Email or Password is incorrect!'
                ]
			];
			
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                //Confirm user credentials and Start a Session//
                $model = new UserModel();
				
				$user = $model->where('email', $this->request->getVar('email'))->first();
				$this->setUserSession($user);
				session()->setFlashdata('success', 'Login Successful...'.$user['id']);

				if(session()->get('id') == 0){
					session_destroy();
					return redirect()->to(base_url('login'))->with('error', 'Failed to start session');
				}

                if(session()->get('role') == 'staff'){
					session()->setFlashdata('success', 'Login Successful...');
					return redirect()->to(base_url('dashboard'));
				} elseif(session()->get('role') == 'admin'){
					session()->setFlashdata('success', 'Login Successful...');
					return redirect()->to(base_url('admin/dashboard'));
				} else {
					session_destroy();
					return redirect()->to(base_url())->with('error', 'Account access is currently restricted, please contact Admin');
				}
            }
		}
		return view('index', $ldata);
	}
	
	private function setUserSession($user)
	{
		
			$data	=	[
				'id'	        =>	$user['id'],
				'fullname'		=>	$user['firstname'].' '.$user['lastname'],
				'email'			=>	$user['email'],
				'role'          =>  $user['role'],
				'isLoggedIn'	=>	true,
			];

		session()->set($data);
		return true;
	}

	function error()
	{
		return view('errors/404');
	}



	#---------------------------------------------
	#	Terminate session & verify active session.
	#---------------------------------------------

	function logout()
	{
		session_destroy();
		return redirect()->to('/');
	}

	private function logged()
	{
		if (session()->get('id') != null) {
			return true;
		} 
	}

	//--------------------------------------------------------------------

}
