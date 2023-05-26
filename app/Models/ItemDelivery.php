<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemDelivery
 * 
 * @property int $id
 * @property int $id_delivery
 * @property string|null $codproduto
 * @property float|null $quantidade
 * @property float|null $unitario
 * @property float|null $total
 * @property string|null $extra
 * @property string|null $complemento
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class ItemDelivery extends Model
{
	protected $table = 'item_delivery';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_delivery' => 'int',
		'quantidade' => 'float',
		'unitario' => 'float',
		'total' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'id_delivery',
		'codproduto',
		'quantidade',
		'unitario',
		'total',
		'extra',
		'complemento',
		'descricao',
		'codempresa'
	];
}
