<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comissao
 * 
 * @property string|null $codvendedor
 * @property string|null $vendedor
 * @property float|null $valor_5
 * @property float|null $valor_3
 * @property int|null $comissao_5
 * @property int|null $comissao_3
 * @property string|null $tipo
 * @property float|null $total_comissao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Comissao extends Model
{
	protected $table = 'comissao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor_5' => 'float',
		'valor_3' => 'float',
		'comissao_5' => 'int',
		'comissao_3' => 'int',
		'total_comissao' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codvendedor',
		'vendedor',
		'valor_5',
		'valor_3',
		'comissao_5',
		'comissao_3',
		'tipo',
		'total_comissao',
		'codempresa'
	];
}
