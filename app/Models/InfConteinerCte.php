<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InfConteinerCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $numero
 * @property Carbon|null $data_entrega
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class InfConteinerCte extends Model
{
	protected $table = 'inf_conteiner_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_entrega' => 'datetime',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'numero',
		'data_entrega',
		'filtro',
		'codempresa'
	];
}
