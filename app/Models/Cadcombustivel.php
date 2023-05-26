<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadcombustivel
 * 
 * @property string|null $nome
 * @property float|null $pr_compra
 * @property float|null $pr_custo
 * @property float|null $pr_venda
 * @property int $codigo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cadcombustivel extends Model
{
	protected $table = 'cadcombustivel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pr_compra' => 'float',
		'pr_custo' => 'float',
		'pr_venda' => 'float',
		'codigo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'pr_compra',
		'pr_custo',
		'pr_venda',
		'codigo',
		'codempresa'
	];
}
