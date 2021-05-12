<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * UserModel which will be used in our User Controller
 */

class ClassModel extends Model
{
	protected $table = 'class';
	protected $allowedFields 	= 	['id', 'name', 'class_teacher', 'created_at', 'updated_at', 'deleted_at'];
	
}
