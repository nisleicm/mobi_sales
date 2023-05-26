<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PassagemCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $passagem
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class PassagemCte extends Model
{
	protected $table = 'passagem_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'passagem',
		'filtro',
		'codempresa'
	];
}
