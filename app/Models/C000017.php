<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000017
 * 
 * @property string $codigo
 * @property string|null $grupo
 * @property string|null $altera_preco_abcfarma
 * @property float|null $comissao
 * @property float|null $desconto
 * @property string|null $dir_imagem
 * @property string|null $foto
 * @property int|null $id_tp_impressora
 * @property int $grupo_balcao
 * @property Carbon|null $datamov
 * @property int $codempresa
 * @property int|null $codigo_outrosistema
 * @property int $id
 *
 * @package App\Models
 */
class C000017 extends Model
{
	protected $table = 'c000017';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'comissao' => 'float',
		'desconto' => 'float',
		'id_tp_impressora' => 'int',
		'grupo_balcao' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'codigo_outrosistema' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'grupo',
		'altera_preco_abcfarma',
		'comissao',
		'desconto',
		'dir_imagem',
		'foto',
		'id_tp_impressora',
		'grupo_balcao',
		'datamov',
		'codempresa',
		'codigo_outrosistema',
		'id'
	];
}
