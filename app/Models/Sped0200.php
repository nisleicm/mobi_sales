<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sped0200
 * 
 * @property string|null $codigo
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 * @property string|null $reg
 * @property string|null $cod_item
 * @property string|null $descr_item
 * @property string|null $cod_barra
 * @property string|null $cod_ant_item
 * @property string|null $unid_inv
 * @property int|null $tipo_item
 * @property string|null $cod_ncm
 * @property string|null $ex_ipi
 * @property int|null $cod_gen
 * @property int|null $cod_lst
 * @property float|null $aliq_icms
 * @property int $codempresa
 *
 * @package App\Models
 */
class Sped0200 extends Model
{
	protected $table = 'sped_0200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dt_ini' => 'datetime',
		'dt_fim' => 'datetime',
		'tipo_item' => 'int',
		'cod_gen' => 'int',
		'cod_lst' => 'int',
		'aliq_icms' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'dt_ini',
		'dt_fim',
		'reg',
		'cod_item',
		'descr_item',
		'cod_barra',
		'cod_ant_item',
		'unid_inv',
		'tipo_item',
		'cod_ncm',
		'ex_ipi',
		'cod_gen',
		'cod_lst',
		'aliq_icms',
		'codempresa'
	];
}
