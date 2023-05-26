<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AtualizadbArquivo
 * 
 * @property string|null $nome
 * @property string|null $caminho
 * @property string|null $status
 * @property string|null $script
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class AtualizadbArquivo extends Model
{
	protected $table = 'atualizadb_arquivos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'caminho',
		'status',
		'script',
		'codempresa'
	];
}
