<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OutrosDocsCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $tipo
 * @property string|null $descricao
 * @property string|null $numero
 * @property Carbon|null $data_emissao
 * @property int|null $filtro
 * @property float|null $valor_documento
 * @property int $codempresa
 *
 * @package App\Models
 */
class OutrosDocsCte extends Model
{
	protected $table = 'outros_docs_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_emissao' => 'datetime',
		'filtro' => 'int',
		'valor_documento' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'tipo',
		'descricao',
		'numero',
		'data_emissao',
		'filtro',
		'valor_documento',
		'codempresa'
	];
}
