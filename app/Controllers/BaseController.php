<?php
namespace App\Controllers;

use App\Models\UserModel; 
use App\Models\SettingsModel; 
use App\Models\CardModel; 
use App\Models\ResultModel; 

/**
 * Class BaseController $this->psw_reset 
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here. $this->withdraw
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
        
		// Helpers
		
		helper(['form', 'url', 'settings']);
		$this->uri = service('uri');
		
		// Models
		$this->users		= new UserModel();
		$this->employee		= new SettingsModel();
		$this->card			= new CardModel();
		$this->results		= new ResultModel();

		// Config
		$this->db 		= \Config\Database::connect();
		$this->email 	= \Config\Services::email();

		// Session
		$this->user_id 		= session()->get('id');
		$uid = $this->user_id;
		$this->user_email 	= session()->get('email');
	}

}
