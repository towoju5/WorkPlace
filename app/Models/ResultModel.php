<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * UserModel which will be used in our User Controller
 */

class ResultModel extends Model
{
	protected $table = 'result';
	protected $allowedFields 	= 	['id', 'student_id', 'subject_id', 'ca_one', 'ca_two', 'exam', 'total', 'grade', 'subject_pos', 'class_avg', 'remark', 'class_id', 'term', 'section', 'created_at', 'updated_at', 'deleted_at'];
	
}
