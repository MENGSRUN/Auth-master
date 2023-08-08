<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblUser
 * 
 * @property int $id
 * @property string $username
 * @property string $passwd
 * @property string $token
 *
 * @package App\Models
 */
class TblUser extends Model
{
	protected $table = 'tbl_user';

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'username',
		'passwd',
		'token'
	];
}
