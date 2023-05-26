<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000011
 * 
 * @property string $codigo
 * @property string|null $servico
 * @property float|null $valor
 * @property string|null $codgrupo
 * @property float|null $comissao
 * @property float|null $salario_base
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000011 extends Model
{
	protected $table = 'c000011';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'comissao' => 'float',
		'salario_base' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'servico',
		'valor',
		'codgrupo',
		'comissao',
		'salario_base',
		'codempresa'
	];
}
