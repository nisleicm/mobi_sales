<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocsAnteriorPapelCte
 * 
 * @property string $codigo
 * @property string|null $cod_doc_ant_cte
 * @property string|null $tipo_doc
 * @property string|null $serie
 * @property string|null $sub_serie
 * @property string|null $numero_doc
 * @property Carbon|null $data_emissao
 * @property string|null $codcte
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class DocsAnteriorPapelCte extends Model
{
	protected $table = 'docs_anterior_papel_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_emissao' => 'datetime',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_doc_ant_cte',
		'tipo_doc',
		'serie',
		'sub_serie',
		'numero_doc',
		'data_emissao',
		'codcte',
		'filtro',
		'codempresa'
	];
}
