<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocsAnteriorCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $codemissor
 * @property string|null $cpf_cnpj
 * @property string|null $ie
 * @property string|null $uf
 * @property string|null $nome
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class DocsAnteriorCte extends Model
{
	protected $table = 'docs_anterior_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'codemissor',
		'cpf_cnpj',
		'ie',
		'uf',
		'nome',
		'filtro',
		'codempresa'
	];
}
