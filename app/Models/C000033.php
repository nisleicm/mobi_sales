<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000033
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $codnota
 * @property float|null $qtde
 * @property string|null $codgrade
 * @property string|null $coditem
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000033 extends Model
{
	protected $table = 'c000033';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'codnota',
		'qtde',
		'codgrade',
		'coditem',
		'codempresa'
	];
}
