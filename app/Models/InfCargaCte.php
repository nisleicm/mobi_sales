<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InfCargaCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $cod_unidade_med
 * @property string|null $tipo_medida
 * @property float|null $quantidade
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class InfCargaCte extends Model
{
	protected $table = 'inf_carga_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quantidade' => 'float',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'cod_unidade_med',
		'tipo_medida',
		'quantidade',
		'filtro',
		'codempresa'
	];
}
