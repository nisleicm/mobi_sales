<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpedC470
 * 
 * @property string|null $codigo
 * @property string|null $codc460
 * @property string|null $reg
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property float|null $qtd_canc
 * @property string|null $unid
 * @property float|null $vl_item
 * @property int|null $cst_icms
 * @property int|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property int $codempresa
 *
 * @package App\Models
 */
class SpedC470 extends Model
{
	protected $table = 'sped_c470';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtd' => 'float',
		'qtd_canc' => 'float',
		'vl_item' => 'float',
		'cst_icms' => 'int',
		'cfop' => 'int',
		'aliq_icms' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codc460',
		'reg',
		'cod_item',
		'qtd',
		'qtd_canc',
		'unid',
		'vl_item',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_pis',
		'vl_cofins',
		'codempresa'
	];
}
