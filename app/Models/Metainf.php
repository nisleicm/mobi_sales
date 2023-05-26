<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Metainf
 * 
 * @property int $id_esct
 * @property string $nome_tabela
 * @property int $tamanho_tabela
 *
 * @package App\Models
 */
class Metainf extends Model
{
	protected $table = 'metainf';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_esct' => 'int',
		'tamanho_tabela' => 'int'
	];

	protected $fillable = [
		'id_esct',
		'nome_tabela',
		'tamanho_tabela'
	];
}
