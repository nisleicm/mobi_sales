<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EndEst
 * 
 * @property int $codigo
 * @property int|null $id
 * @property string|null $codloja
 * @property string|null $cod_prod
 * @property int|null $id_endereco
 * @property int|null $qtde
 * @property float|null $peso
 * @property float|null $valor
 * @property Carbon|null $dt_sinc_env
 * @property Carbon|null $dt_sinc_rec
 * @property Carbon|null $dt_alt
 * @property string $codcliente
 * @property string|null $produto
 *
 * @package App\Models
 */
class EndEst extends Model
{
	protected $table = 'end_est';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'id' => 'int',
		'id_endereco' => 'int',
		'qtde' => 'int',
		'peso' => 'float',
		'valor' => 'float',
		'dt_sinc_env' => 'datetime',
		'dt_sinc_rec' => 'datetime',
		'dt_alt' => 'datetime'
	];

	protected $fillable = [
		'codigo',
		'id',
		'codloja',
		'cod_prod',
		'id_endereco',
		'qtde',
		'peso',
		'valor',
		'dt_sinc_env',
		'dt_sinc_rec',
		'dt_alt',
		'codcliente',
		'produto'
	];
}
