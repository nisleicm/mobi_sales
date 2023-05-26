<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD530
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_serv
 * @property Carbon|null $dt_ini_serv
 * @property Carbon|null $dt_fin_serv
 * @property string|null $per_fiscal
 * @property string|null $cod_area
 * @property string|null $terminal
 *
 * @package App\Models
 */
class RegD530 extends Model
{
	protected $table = 'reg_d530';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini_serv' => 'datetime',
		'dt_fin_serv' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_serv',
		'dt_ini_serv',
		'dt_fin_serv',
		'per_fiscal',
		'cod_area',
		'terminal'
	];
}
