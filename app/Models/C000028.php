<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000028
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $porcao
 * @property int|null $valor_calorico
 * @property string|null $valor_calorico_vd
 * @property int|null $carboidratos
 * @property int|null $carboidratos_vd
 * @property int|null $proteinas
 * @property int|null $proteinas_vd
 * @property float|null $gordurastotais
 * @property int|null $gordurastotais_vd
 * @property float|null $gordurassaturadas
 * @property int|null $gordurassaturadas_vd
 * @property int|null $colesterol
 * @property int|null $colesterol_vd
 * @property int|null $fibra
 * @property int|null $fibra_vd
 * @property float|null $calcio
 * @property int|null $calcio_vd
 * @property float|null $ferro
 * @property int|null $ferro_vd
 * @property int|null $sodio
 * @property int|null $sodio_vd
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000028 extends Model
{
	protected $table = 'c000028';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor_calorico' => 'int',
		'carboidratos' => 'int',
		'carboidratos_vd' => 'int',
		'proteinas' => 'int',
		'proteinas_vd' => 'int',
		'gordurastotais' => 'float',
		'gordurastotais_vd' => 'int',
		'gordurassaturadas' => 'float',
		'gordurassaturadas_vd' => 'int',
		'colesterol' => 'int',
		'colesterol_vd' => 'int',
		'fibra' => 'int',
		'fibra_vd' => 'int',
		'calcio' => 'float',
		'calcio_vd' => 'int',
		'ferro' => 'float',
		'ferro_vd' => 'int',
		'sodio' => 'int',
		'sodio_vd' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'porcao',
		'valor_calorico',
		'valor_calorico_vd',
		'carboidratos',
		'carboidratos_vd',
		'proteinas',
		'proteinas_vd',
		'gordurastotais',
		'gordurastotais_vd',
		'gordurassaturadas',
		'gordurassaturadas_vd',
		'colesterol',
		'colesterol_vd',
		'fibra',
		'fibra_vd',
		'calcio',
		'calcio_vd',
		'ferro',
		'ferro_vd',
		'sodio',
		'sodio_vd',
		'codempresa'
	];
}
