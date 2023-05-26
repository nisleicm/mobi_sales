<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0900
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $rec_total_bloco_a
 * @property float|null $rec_nrb_bloco_a
 * @property float|null $rec_total_bloco_c
 * @property float|null $rec_nrb_bloco_c
 * @property float|null $rec_total_bloco_d
 * @property float|null $rec_nrb_bloco_d
 * @property float|null $rec_total_bloco_f
 * @property float|null $rec_nrb_bloco_f
 * @property float|null $rec_total_bloco_i
 * @property float|null $rec_nrb_bloco_i
 * @property float|null $rec_total_bloco_1
 * @property float|null $rec_nrb_bloco_1
 * @property float|null $rec_total_periodo
 * @property float|null $rec_total_nrb_periodo
 *
 * @package App\Models
 */
class ContReg0900 extends Model
{
	protected $table = 'cont_reg_0900';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'rec_total_bloco_a' => 'float',
		'rec_nrb_bloco_a' => 'float',
		'rec_total_bloco_c' => 'float',
		'rec_nrb_bloco_c' => 'float',
		'rec_total_bloco_d' => 'float',
		'rec_nrb_bloco_d' => 'float',
		'rec_total_bloco_f' => 'float',
		'rec_nrb_bloco_f' => 'float',
		'rec_total_bloco_i' => 'float',
		'rec_nrb_bloco_i' => 'float',
		'rec_total_bloco_1' => 'float',
		'rec_nrb_bloco_1' => 'float',
		'rec_total_periodo' => 'float',
		'rec_total_nrb_periodo' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'rec_total_bloco_a',
		'rec_nrb_bloco_a',
		'rec_total_bloco_c',
		'rec_nrb_bloco_c',
		'rec_total_bloco_d',
		'rec_nrb_bloco_d',
		'rec_total_bloco_f',
		'rec_nrb_bloco_f',
		'rec_total_bloco_i',
		'rec_nrb_bloco_i',
		'rec_total_bloco_1',
		'rec_nrb_bloco_1',
		'rec_total_periodo',
		'rec_total_nrb_periodo'
	];
}
