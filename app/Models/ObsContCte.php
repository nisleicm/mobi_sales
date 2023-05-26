<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObsContCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $identificar
 * @property string|null $obs
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class ObsContCte extends Model
{
	protected $table = 'obs_cont_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'identificar',
		'obs',
		'filtro',
		'codempresa'
	];
}
