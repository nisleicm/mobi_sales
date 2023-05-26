<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC120
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_doc_imp
 * @property string|null $num_doc_imp
 * @property float|null $pis_imp
 * @property float|null $cofins_imp
 * @property string|null $num_acdraw
 *
 * @package App\Models
 */
class RegC120 extends Model
{
	protected $table = 'reg_c120';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'pis_imp' => 'float',
		'cofins_imp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_doc_imp',
		'num_doc_imp',
		'pis_imp',
		'cofins_imp',
		'num_acdraw'
	];
}
