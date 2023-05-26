<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imobilizado
 * 
 * @property int|null $codproduto
 * @property int|null $identifica_mercadoria
 * @property int|null $cod_principal
 * @property string|null $cod_cta
 * @property int|null $num_parcelas
 * @property string|null $cod_ccus
 * @property string|null $funcao
 * @property int|null $vida_util
 * @property int $codempresa
 *
 * @package App\Models
 */
class Imobilizado extends Model
{
	protected $table = 'imobilizados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codproduto' => 'int',
		'identifica_mercadoria' => 'int',
		'cod_principal' => 'int',
		'num_parcelas' => 'int',
		'vida_util' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'identifica_mercadoria',
		'cod_principal',
		'cod_cta',
		'num_parcelas',
		'cod_ccus',
		'funcao',
		'vida_util',
		'codempresa'
	];
}
