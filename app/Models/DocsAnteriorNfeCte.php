<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocsAnteriorNfeCte
 * 
 * @property string $codigo
 * @property string|null $cod_doc_ant_cte
 * @property string|null $chave_acesso
 * @property string|null $codcte
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class DocsAnteriorNfeCte extends Model
{
	protected $table = 'docs_anterior_nfe_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_doc_ant_cte',
		'chave_acesso',
		'codcte',
		'filtro',
		'codempresa'
	];
}
