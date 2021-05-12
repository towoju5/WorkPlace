<?php namespace App\Validation;
use App\Models\AuthModel;

/**
 * Custom User Validation class.
 */
class AuthRules
{
	
	public function ValidateAuth(string $str, string $fields, array $data)
	{
		$model = new AuthModel;
		$admin = $model->where('email', $data['email'])->first();

		if (!$admin){
			return false;
		}

		return password_verify($data['password'], $admin['password']);

	}
}