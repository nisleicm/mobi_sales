<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mesasmobile
 * 
 * @property int|null $quantidade
 * @property string|null $ip_servidor
 * @property string|null $ipmobile
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Mesasmobile extends Model
{
	protected $table = 'mesasmobile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quantidade' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'quantidade',
		'ip_servidor',
		'ipmobile',
		'codempresa'
	];
}
