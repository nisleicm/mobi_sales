<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemDeliverySub
 * 
 * @property int|null $id_item
 * @property int|null $codigo
 * @property string|null $codpro
 * @property float|null $qtde
 * @property int $codempresa
 *
 * @package App\Models
 */
class ItemDeliverySub extends Model
{
	protected $table = 'item_delivery_sub';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_item' => 'int',
		'codigo' => 'int',
		'qtde' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id_item',
		'codigo',
		'codpro',
		'qtde',
		'codempresa'
	];
}
