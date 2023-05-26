<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LmcAberfech
 * 
 * @property int $codigo
 * @property string|null $cod_filial
 * @property string|null $filial
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cep
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $ie
 * @property string|null $cnpj
 * @property string|null $im
 * @property string|null $distribuidora
 * @property int|null $capacidade
 * @property int|null $cod_combustivel
 * @property string|null $nome_combustivel
 * @property string|null $numero
 * @property string|null $numero_juntacom
 * @property Carbon|null $data_abertura
 * @property int|null $numero_ordem
 * @property int|null $pagina_atual
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class LmcAberfech extends Model
{
	protected $table = 'lmc_aberfech';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'capacidade' => 'int',
		'cod_combustivel' => 'int',
		'data_abertura' => 'datetime',
		'numero_ordem' => 'int',
		'pagina_atual' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cod_filial',
		'filial',
		'endereco',
		'bairro',
		'cep',
		'cidade',
		'uf',
		'ie',
		'cnpj',
		'im',
		'distribuidora',
		'capacidade',
		'cod_combustivel',
		'nome_combustivel',
		'numero',
		'numero_juntacom',
		'data_abertura',
		'numero_ordem',
		'pagina_atual',
		'codempresa'
	];
}
