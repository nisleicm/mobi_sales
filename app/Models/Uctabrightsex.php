<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uctabrightsex
 * 
 * @property int|null $uciduser
 * @property string|null $ucmodule
 * @property string|null $uccompname
 * @property string|null $ucformname
 * @property string|null $uckey
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Uctabrightsex extends Model
{
	protected $table = 'uctabrightsex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uciduser' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'uciduser',
		'ucmodule',
		'uccompname',
		'ucformname',
		'uckey',
		'codempresa'
	];
}
