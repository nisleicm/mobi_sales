<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class R000001
 * 
 * @property int $codigo
 * @property Carbon|null $data
 * @property string|null $hora
 * @property string|null $ecf
 * @property string|null $coo
 * @property string|null $cer
 * @property string|null $cod_funcionario
 * @property string|null $perguntou_comissao
 * @property string|null $cliente_autorizou
 * @property int|null $mesa
 * @property int|null $comanda
 * @property string|null $semcomanda
 * @property string|null $fechar
 * @property string|null $impresso_fechamento
 * @property int $codempresa
 *
 * @package App\Models
 */
class R000001 extends Model
{
	protected $table = 'r000001';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'data' => 'datetime',
		'mesa' => 'int',
		'comanda' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'hora',
		'ecf',
		'coo',
		'cer',
		'cod_funcionario',
		'perguntou_comissao',
		'cliente_autorizou',
		'mesa',
		'comanda',
		'semcomanda',
		'fechar',
		'impresso_fechamento'
	];
}
