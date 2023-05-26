<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000056
 *
 * @property Carbon|null $data
 * @property string|null $codigo
 * @property string|null $codcliente
 * @property string|null $codvendedor
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property string|null $codnf
 * @property string|null $codvenda
 * @property int|null $gera_nf
 * @property int|null $qtde_meses
 * @property string|null $condpagtocliente
 * @property int|null $pend_entrada
 * @property int|null $pend_cheque
 * @property int|null $pend_cartao
 * @property string|null $nome_vendedor
 * @property float|null $entrada
 * @property string|null $codloja
 * @property int $id
 * @property int|null $status
 * @property int|null $tipo
 * @property Carbon|null $dt_sinc_env
 * @property Carbon|null $dt_sin_rec
 * @property string|null $assina
 * @property string|null $cliente_foto
 * @property int $codempresa
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 *
 * @property C000007|null $c000007
 * @property Collection|C000057[] $c000057_s
 *
 * @package App\Models
 */
class C000056 extends Model
{
	protected $table = 'c000056';

	protected $casts = [
		'data' => 'datetime',
		'subtotal' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'gera_nf' => 'int',
		'qtde_meses' => 'int',
		'pend_entrada' => 'int',
		'pend_cheque' => 'int',
		'pend_cartao' => 'int',
		'entrada' => 'float',
		'status' => 'int',
		'tipo' => 'int',
		'dt_sinc_env' => 'datetime',
		'dt_sin_rec' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'codigo',
		'codcliente',
		'codvendedor',
		'subtotal',
		'desconto',
		'acrescimo',
		'total',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'codnf',
		'codvenda',
		'gera_nf',
		'qtde_meses',
		'condpagtocliente',
		'pend_entrada',
		'pend_cheque',
		'pend_cartao',
		'nome_vendedor',
		'entrada',
		'codloja',
		'status',
		'tipo',
		'dt_sinc_env',
		'dt_sin_rec',
		'assina',
		'cliente_foto',
		'codempresa'
	];

	public function c000007()
	{
		return $this->belongsTo(C000007::class, 'codcliente');
	}

	public function c000057_s()
	{
		return $this->hasMany(C000057::class);
	}

      public function itens()
      {
          return $this->hasMany(c000057::class);
      }
}
