<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bico
 * 
 * @property int $cod_bic
 * @property int $cod_bom
 * @property string $nom_bic
 * @property int $num_fis
 * @property string $num_log
 * @property int|null $codempresa
 * 
 * @property Bomba $bomba
 *
 * @package App\Models
 */
class Bico extends Model
{
	protected $table = 'bico';
	protected $primaryKey = 'cod_bic';
	public $timestamps = false;

	protected $casts = [
		'cod_bom' => 'int',
		'num_fis' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_bom',
		'nom_bic',
		'num_fis',
		'num_log',
		'codempresa'
	];

	public function bomba()
	{
		return $this->belongsTo(Bomba::class, 'cod_bom');
	}
}
