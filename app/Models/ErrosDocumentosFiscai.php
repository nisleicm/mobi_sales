<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ErrosDocumentosFiscai
 * 
 * @property int $id
 * @property string|null $documento
 * @property string|null $modelo
 * @property string|null $layout
 * @property string|null $id_tag
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class ErrosDocumentosFiscai extends Model
{
	protected $table = 'erros_documentos_fiscais';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'documento',
		'modelo',
		'layout',
		'id_tag',
		'descricao',
		'codempresa'
	];
}
