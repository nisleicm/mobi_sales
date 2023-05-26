<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TabEndereco
 * 
 * @property int $id
 * @property string|null $codloja
 * @property string|null $descricao
 * @property string|null $identificacao
 * @property int|null $numeracao
 * @property string|null $corredor
 * @property string|null $rua
 * @property string|null $prateleira
 * @property int|null $nivel
 * @property string|null $letra
 * @property int|null $tipo
 * @property string|null $identificatipo
 * @property Carbon|null $dt_sinc_env
 * @property Carbon|null $dt_sinc_rec
 * @property Carbon|null $dt_alt
 * @property string|null $codcliente
 *
 * @package App\Models
 */
class TabEndereco extends Model
{
	protected $table = 'tab_enderecos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'numeracao' => 'int',
		'nivel' => 'int',
		'tipo' => 'int',
		'dt_sinc_env' => 'datetime',
		'dt_sinc_rec' => 'datetime',
		'dt_alt' => 'datetime'
	];

	protected $fillable = [
		'id',
		'codloja',
		'descricao',
		'identificacao',
		'numeracao',
		'corredor',
		'rua',
		'prateleira',
		'nivel',
		'letra',
		'tipo',
		'identificatipo',
		'dt_sinc_env',
		'dt_sinc_rec',
		'dt_alt',
		'codcliente'
	];
}
