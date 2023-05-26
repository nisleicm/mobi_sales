<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Impressora
 * 
 * @property int $codigo
 * @property string|null $caminho_porta
 * @property int|null $modelo
 * @property string|null $descricao
 * @property int|null $guilhotina
 * @property int|null $colunas
 * @property int|null $avanca_papel
 * @property int $codempresa
 *
 * @package App\Models
 */
class Impressora extends Model
{
	protected $table = 'impressoras';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'modelo' => 'int',
		'guilhotina' => 'int',
		'colunas' => 'int',
		'avanca_papel' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'caminho_porta',
		'modelo',
		'descricao',
		'guilhotina',
		'colunas',
		'avanca_papel',
		'codempresa'
	];
}
