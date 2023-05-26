<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NfCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $serie
 * @property string|null $numero
 * @property Carbon|null $data_emissao
 * @property string|null $cfop
 * @property string|null $modelo
 * @property string|null $nr_romaneio
 * @property string|null $nr_pedido
 * @property float|null $base_calc_icms
 * @property float|null $valor_icms
 * @property float|null $base_calc_icms_st
 * @property float|null $valor_icms_st
 * @property float|null $peso_total
 * @property string|null $pin
 * @property float|null $valor_produtos
 * @property float|null $valor_nota
 * @property string|null $local_retirada_dif
 * @property string|null $codretirada_diferente
 * @property float|null $valor_documento
 * @property int $codempresa
 *
 * @package App\Models
 */
class NfCte extends Model
{
	protected $table = 'nf_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_emissao' => 'datetime',
		'base_calc_icms' => 'float',
		'valor_icms' => 'float',
		'base_calc_icms_st' => 'float',
		'valor_icms_st' => 'float',
		'peso_total' => 'float',
		'valor_produtos' => 'float',
		'valor_nota' => 'float',
		'valor_documento' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'serie',
		'numero',
		'data_emissao',
		'cfop',
		'modelo',
		'nr_romaneio',
		'nr_pedido',
		'base_calc_icms',
		'valor_icms',
		'base_calc_icms_st',
		'valor_icms_st',
		'peso_total',
		'pin',
		'valor_produtos',
		'valor_nota',
		'local_retirada_dif',
		'codretirada_diferente',
		'valor_documento',
		'codempresa'
	];
}
