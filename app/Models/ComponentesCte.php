<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComponentesCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $nome
 * @property float|null $valor
 * @property int|null $filtro
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class ComponentesCte extends Model
{
	protected $table = 'componentes_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'nome',
		'valor',
		'filtro',
		'codempresa'
	];
}
