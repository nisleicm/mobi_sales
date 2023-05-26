<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000034
 * 
 * @property string $codigo
 * @property string|null $tipo
 * @property string|null $codtipo
 * @property string|null $nome
 * @property string|null $telefone1
 * @property string|null $telefone2
 * @property string|null $telefone3
 * @property string|null $celular
 * @property string|null $email
 * @property string|null $fax
 * @property string|null $homepage
 * @property int|null $tipoi
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000034 extends Model
{
	protected $table = 'c000034';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tipoi' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tipo',
		'codtipo',
		'nome',
		'telefone1',
		'telefone2',
		'telefone3',
		'celular',
		'email',
		'fax',
		'homepage',
		'tipoi',
		'codloja',
		'codempresa'
	];
}
