<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MtTerminal
 * 
 * @property int $codigo
 * @property string|null $descricao
 * @property int|null $ativa
 * @property int|null $protocolo
 * @property int|null $display
 * @property string|null $ip
 * @property int|null $portaimpressora
 * @property int|null $portabalanca
 * @property int $codempresa
 *
 * @package App\Models
 */
class MtTerminal extends Model
{
	protected $table = 'mt_terminal';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'ativa' => 'int',
		'protocolo' => 'int',
		'display' => 'int',
		'portaimpressora' => 'int',
		'portabalanca' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'ativa',
		'protocolo',
		'display',
		'ip',
		'portaimpressora',
		'portabalanca',
		'codempresa'
	];
}
