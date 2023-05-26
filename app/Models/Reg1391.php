<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1391
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_registro
 * @property float|null $qtd
 * @property float|null $estq_ini
 * @property float|null $qtd_produz
 * @property float|null $ent_anid_hid
 * @property float|null $outr_entr
 * @property float|null $perda
 * @property float|null $cons
 * @property float|null $sai_ani_hid
 * @property float|null $saidas
 * @property float|null $estq_fin
 * @property float|null $estq_ini_mel
 * @property float|null $prod_dia_mel
 * @property float|null $util_mel
 * @property float|null $prod_alc_mel
 * @property string|null $obs
 * @property string|null $cod_item
 * @property string|null $tp_residuo
 * @property float|null $qtd_residuo
 *
 * @package App\Models
 */
class Reg1391 extends Model
{
	protected $table = 'reg_1391';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_registro' => 'datetime',
		'qtd' => 'float',
		'estq_ini' => 'float',
		'qtd_produz' => 'float',
		'ent_anid_hid' => 'float',
		'outr_entr' => 'float',
		'perda' => 'float',
		'cons' => 'float',
		'sai_ani_hid' => 'float',
		'saidas' => 'float',
		'estq_fin' => 'float',
		'estq_ini_mel' => 'float',
		'prod_dia_mel' => 'float',
		'util_mel' => 'float',
		'prod_alc_mel' => 'float',
		'qtd_residuo' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_registro',
		'qtd',
		'estq_ini',
		'qtd_produz',
		'ent_anid_hid',
		'outr_entr',
		'perda',
		'cons',
		'sai_ani_hid',
		'saidas',
		'estq_fin',
		'estq_ini_mel',
		'prod_dia_mel',
		'util_mel',
		'prod_alc_mel',
		'obs',
		'cod_item',
		'tp_residuo',
		'qtd_residuo'
	];
}
