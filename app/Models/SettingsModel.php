<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * UserModel which will be used in our User Controller
 */

class SettingsModel extends Model
{
	protected $table = 'settings';
	protected $allowedFields 	= 	['id', 'site_title', 'site_email', 'logo', 'address', 'phone', 'cardprefix', 'maxcardusage', 'cur_term', 'next_term_begin', 'next_term_ends', 'created_at', 'updated_at', 'deleted_at'];
	
}
