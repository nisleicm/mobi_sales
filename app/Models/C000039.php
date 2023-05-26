<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000039
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $codnota
 * @property float|null $qtde
 * @property float|null $qtde_rec
 * @property string|null $codgrade
 * @property string|null $coditem
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000039 extends Model
{
	protected $table = 'c000039';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'qtde_rec' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'codnota',
		'qtde',
		'qtde_rec',
		'codgrade',
		'coditem',
		'codempresa'
	];
}
