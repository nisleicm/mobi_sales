<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK275
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property float|null $qtd_cor_pos
 * @property float|null $qtd_cor_neg
 * @property string|null $cod_ins_subst
 *
 * @package App\Models
 */
class RegK275 extends Model
{
	protected $table = 'reg_k275';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd_cor_pos' => 'float',
		'qtd_cor_neg' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'qtd_cor_pos',
		'qtd_cor_neg',
		'cod_ins_subst'
	];
}
