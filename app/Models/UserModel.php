<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * UserModel which will be used in our User Controller
 */

class UserModel extends Model
{
	protected $table = 'users';
	protected $allowedFields 	= 	['id', 'firstname', 'lastname', 'email', 'password', 'active', 'role', 'status', 'created_at', 'updated_at', 'deleted_at'];
	protected $beforeInsert		=	['beforeInsert'];
	protected $beforeUpdate		=	['beforeUpdate'];
	protected $useSoftDeletes = true;
	
	protected function beforeInsert(array $data)
	{
		$data = $this->passwordHash($data);
		return $data;
	}

	protected function beforeUpdate(array $data){
		$data = $this->passwordHash($data);
		return $data;
	}

	protected function passwordHash(array $data){
		if (isset($data['data']['password'])) {
			$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		}
		return $data;
	}
}
