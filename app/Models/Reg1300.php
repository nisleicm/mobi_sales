<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property Carbon|null $dt_fech
 * @property float|null $estq_abert
 * @property float|null $vol_entr
 * @property float|null $vol_disp
 * @property float|null $vol_saidas
 * @property float|null $estq_escr
 * @property float|null $val_aj_perda
 * @property float|null $val_aj_ganho
 * @property float|null $fech_fisico
 *
 * @package App\Models
 */
class Reg1300 extends Model
{
	protected $table = 'reg_1300';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_fech' => 'datetime',
		'estq_abert' => 'float',
		'vol_entr' => 'float',
		'vol_disp' => 'float',
		'vol_saidas' => 'float',
		'estq_escr' => 'float',
		'val_aj_perda' => 'float',
		'val_aj_ganho' => 'float',
		'fech_fisico' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'dt_fech',
		'estq_abert',
		'vol_entr',
		'vol_disp',
		'vol_saidas',
		'estq_escr',
		'val_aj_perda',
		'val_aj_ganho',
		'fech_fisico'
	];
}
