<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TanqueEscala
 * 
 * @property int $cod_tan_esc
 * @property int $cod_tan
 * @property float $med_alt
 * @property float $qtd_ltr
 * @property int|null $codempresa
 * 
 * @property Tanque $tanque
 *
 * @package App\Models
 */
class TanqueEscala extends Model
{
	protected $table = 'tanque_escala';
	protected $primaryKey = 'cod_tan_esc';
	public $timestamps = false;

	protected $casts = [
		'cod_tan' => 'int',
		'med_alt' => 'float',
		'qtd_ltr' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_tan',
		'med_alt',
		'qtd_ltr',
		'codempresa'
	];

	public function tanque()
	{
		return $this->belongsTo(Tanque::class, 'cod_tan');
	}
}
