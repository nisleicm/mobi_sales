<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000003
 * 
 * @property string $codigo
 * @property string $usuario
 * @property string|null $senha
 * @property int|null $nivel
 * @property string|null $codvendedor
 * @property string|null $vendedor
 * @property string|null $adm_agenda
 * @property int|null $administrador
 * @property string|null $cod_caixa
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000003 extends Model
{
	protected $table = 'c000003';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nivel' => 'int',
		'administrador' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'usuario',
		'senha',
		'nivel',
		'codvendedor',
		'vendedor',
		'adm_agenda',
		'administrador',
		'cod_caixa',
		'codempresa'
	];
}
