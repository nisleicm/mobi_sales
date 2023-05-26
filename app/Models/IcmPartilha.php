<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IcmPartilha
 * 
 * @property int|null $codigo
 * @property string|null $uf
 * @property string|null $descr_uf
 * @property string|null $ibge
 * @property float|null $aliq
 * @property float|null $aliqreduzbase
 * @property float|null $aliqimportado
 * @property string|null $ie_subtrib
 * @property float|null $mvast
 * @property float|null $aliqst
 * @property float|null $fcp
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class IcmPartilha extends Model
{
	protected $table = 'icm_partilha';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'aliq' => 'float',
		'aliqreduzbase' => 'float',
		'aliqimportado' => 'float',
		'mvast' => 'float',
		'aliqst' => 'float',
		'fcp' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'uf',
		'descr_uf',
		'ibge',
		'aliq',
		'aliqreduzbase',
		'aliqimportado',
		'ie_subtrib',
		'mvast',
		'aliqst',
		'fcp',
		'codempresa'
	];
}
