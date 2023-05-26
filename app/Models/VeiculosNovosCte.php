<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VeiculosNovosCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $cor
 * @property string|null $descricao_cor
 * @property string|null $cod_marc_modelo
 * @property string|null $chassi
 * @property float|null $valor_unit
 * @property float|null $frete_unit
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class VeiculosNovosCte extends Model
{
	protected $table = 'veiculos_novos_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor_unit' => 'float',
		'frete_unit' => 'float',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'cor',
		'descricao_cor',
		'cod_marc_modelo',
		'chassi',
		'valor_unit',
		'frete_unit',
		'filtro',
		'codempresa'
	];
}
