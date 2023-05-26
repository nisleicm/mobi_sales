<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TabAnp
 * 
 * @property int $codigo
 * @property string|null $familia
 * @property string|null $grupo
 * @property string|null $subgrupo
 * @property string|null $sub_subgrupo
 * @property string|null $desc_anp
 * @property string|null $codigo_anp
 * @property string|null $ug
 * @property string|null $um_simples
 * @property string|null $ramo
 * @property string|null $dataini
 * @property string|null $datafin
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class TabAnp extends Model
{
	protected $table = 'tab_anp';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'familia',
		'grupo',
		'subgrupo',
		'sub_subgrupo',
		'desc_anp',
		'codigo_anp',
		'ug',
		'um_simples',
		'ramo',
		'dataini',
		'datafin',
		'codempresa'
	];
}
