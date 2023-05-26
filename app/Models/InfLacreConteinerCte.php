<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InfLacreConteinerCte
 * 
 * @property string $codigo
 * @property string|null $codconteiner
 * @property string|null $lacre
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class InfLacreConteinerCte extends Model
{
	protected $table = 'inf_lacre_conteiner_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codconteiner',
		'lacre',
		'filtro',
		'codempresa'
	];
}
