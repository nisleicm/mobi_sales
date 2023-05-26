<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExtraProduto
 * 
 * @property int|null $cod_prod
 * @property int|null $id_extra
 * @property float|null $valor
 * @property int $id
 * @property int $codempresa
 *
 * @package App\Models
 */
class ExtraProduto extends Model
{
	protected $table = 'extra_produtos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cod_prod' => 'int',
		'id_extra' => 'int',
		'valor' => 'float',
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_prod',
		'id_extra',
		'valor'
	];
}
