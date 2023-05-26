<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Terminal
 * 
 * @property int|null $codigo
 * @property string|null $protocolo
 * @property string|null $ip
 * @property int|null $portaimpressora
 * @property int|null $portabalanca
 * @property int|null $display
 * @property string|null $ativa
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Terminal extends Model
{
	protected $table = 'terminal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'portaimpressora' => 'int',
		'portabalanca' => 'int',
		'display' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'protocolo',
		'ip',
		'portaimpressora',
		'portabalanca',
		'display',
		'ativa',
		'descricao',
		'codempresa'
	];
}
