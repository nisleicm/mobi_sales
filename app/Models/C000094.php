<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000094
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property string|null $memorando
 * @property string|null $notafiscal
 * @property string|null $notafiscal_modelo
 * @property string|null $notafiscal_serie
 * @property Carbon|null $notafiscal_data
 * @property string|null $despacho
 * @property Carbon|null $despacho_data
 * @property string|null $registro
 * @property Carbon|null $registro_data
 * @property string|null $conhecimento_embarque
 * @property Carbon|null $conhecimento_embarque_data
 * @property string|null $estado_fabricante
 * @property string|null $pais_destino
 * @property string|null $codfornecedor
 * @property string|null $conhecimento
 * @property string|null $conhecimento_modelo
 * @property string|null $conhecimento_serie
 * @property Carbon|null $conhecimento_data
 * @property string|null $transportador_codigo
 * @property string|null $transportador_nome
 * @property string|null $transportador_endereco
 * @property string|null $transportador_bairro
 * @property string|null $transportador_cidade
 * @property string|null $transportador_uf
 * @property string|null $transportador_pais
 * @property string|null $transportador_cnpjcpf
 * @property string|null $transportador_inscrg
 * @property string|null $situacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000094 extends Model
{
	protected $table = 'c000094';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'notafiscal_data' => 'datetime',
		'despacho_data' => 'datetime',
		'registro_data' => 'datetime',
		'conhecimento_embarque_data' => 'datetime',
		'conhecimento_data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'memorando',
		'notafiscal',
		'notafiscal_modelo',
		'notafiscal_serie',
		'notafiscal_data',
		'despacho',
		'despacho_data',
		'registro',
		'registro_data',
		'conhecimento_embarque',
		'conhecimento_embarque_data',
		'estado_fabricante',
		'pais_destino',
		'codfornecedor',
		'conhecimento',
		'conhecimento_modelo',
		'conhecimento_serie',
		'conhecimento_data',
		'transportador_codigo',
		'transportador_nome',
		'transportador_endereco',
		'transportador_bairro',
		'transportador_cidade',
		'transportador_uf',
		'transportador_pais',
		'transportador_cnpjcpf',
		'transportador_inscrg',
		'situacao',
		'codempresa'
	];
}
