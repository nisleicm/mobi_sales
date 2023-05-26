<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImpressaoCaixa
 * 
 * @property int $id
 * @property string|null $codcaixa
 * @property string|null $terminal
 * @property string|null $impressora
 * @property string|null $codemissor
 * @property int|null $modelo_impressora
 * @property int|null $tipo_documento
 * @property int $codempresa
 *
 * @package App\Models
 */
class ImpressaoCaixa extends Model
{
	protected $table = 'impressao_caixa';
	public $timestamps = false;

	protected $casts = [
		'modelo_impressora' => 'int',
		'tipo_documento' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcaixa',
		'terminal',
		'impressora',
		'codemissor',
		'modelo_impressora',
		'tipo_documento',
		'codempresa'
	];
}
