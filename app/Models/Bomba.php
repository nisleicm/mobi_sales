<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bomba
 * 
 * @property int $cod_bom
 * @property int $cod_tan
 * @property string $nom_bom
 * @property int $num_fis
 * @property int|null $codempresa
 * 
 * @property Tanque $tanque
 * @property Collection|Bico[] $bicos
 *
 * @package App\Models
 */
class Bomba extends Model
{
	protected $table = 'bomba';
	protected $primaryKey = 'cod_bom';
	public $timestamps = false;

	protected $casts = [
		'cod_tan' => 'int',
		'num_fis' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_tan',
		'nom_bom',
		'num_fis',
		'codempresa'
	];

	public function tanque()
	{
		return $this->belongsTo(Tanque::class, 'cod_tan');
	}

	public function bicos()
	{
		return $this->hasMany(Bico::class, 'cod_bom');
	}
}
