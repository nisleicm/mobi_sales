<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sped0500
 * 
 * @property int|null $codigo
 * @property string|null $conta
 * @property string|null $descricao
 * @property int|null $nivel
 * @property int|null $ctaanalitica
 * @property int|null $codctasup
 * @property int|null $grupo
 * @property int $codempresa
 *
 * @package App\Models
 */
class Sped0500 extends Model
{
	protected $table = 'sped_0500';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'nivel' => 'int',
		'ctaanalitica' => 'int',
		'codctasup' => 'int',
		'grupo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'conta',
		'descricao',
		'nivel',
		'ctaanalitica',
		'codctasup',
		'grupo',
		'codempresa'
	];
}
