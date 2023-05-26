<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InfSeguroCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $tipo_resp
 * @property string|null $nome_seguradora
 * @property string|null $numero_apolice
 * @property string|null $numero_averbacao
 * @property float|null $valor_merc_averb
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class InfSeguroCte extends Model
{
	protected $table = 'inf_seguro_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor_merc_averb' => 'float',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'tipo_resp',
		'nome_seguradora',
		'numero_apolice',
		'numero_averbacao',
		'valor_merc_averb',
		'filtro',
		'codempresa'
	];
}
