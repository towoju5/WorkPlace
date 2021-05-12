<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('role') === 'admin') {
			session()->setFlashdata('error', "Welcome Back Admin.");
			return redirect()->to(base_url('admin/dashboard'));
		}elseif (!session()->get('isLoggedIn')) {
        	session()->setFlashdata('error', 'Please Login...');
	        return redirect()->to('/login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}