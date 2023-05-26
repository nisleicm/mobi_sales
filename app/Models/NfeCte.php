<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NfeCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $chave_acesso
 * @property string|null $pin
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class NfeCte extends Model
{
	protected $table = 'nfe_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'chave_acesso',
		'pin',
		'filtro',
		'codempresa'
	];
}
