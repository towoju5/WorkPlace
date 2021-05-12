<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * UserModel which will be used in our User Controller
 */

class CardModel extends Model
{
	protected $table = 'cards';
	protected $allowedFields 	= 	['id', 'pin', 'serial', 'studentId', 'card_usage', 'created_at', 'updated_at', 'deleted_at'];
	
}
