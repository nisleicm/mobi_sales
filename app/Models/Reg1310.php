<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1310
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_tanque
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
class Reg1310 extends Model
{
	protected $table = 'reg_1310';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
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
		'num_tanque',
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
