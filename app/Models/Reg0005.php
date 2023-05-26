<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0005
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $fantasia
 * @property string|null $cep
 * @property string|null $endereco
 * @property string|null $num
 * @property string|null $compl
 * @property string|null $bairro
 * @property string|null $fone
 * @property string|null $fax
 * @property string|null $email
 *
 * @package App\Models
 */
class Reg0005 extends Model
{
	protected $table = 'reg_0005';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'fantasia',
		'cep',
		'endereco',
		'num',
		'compl',
		'bairro',
		'fone',
		'fax',
		'email'
	];
}
