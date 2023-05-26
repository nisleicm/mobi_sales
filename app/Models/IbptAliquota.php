<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IbptAliquota
 * 
 * @property string $codigo
 * @property string|null $ex
 * @property int|null $tabela
 * @property float|null $aliqnac
 * @property float|null $aliqimp
 * @property string|null $ncm
 * @property float|null $aliqest
 * @property float|null $aliqmun
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class IbptAliquota extends Model
{
	protected $table = 'ibpt_aliquotas';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tabela' => 'int',
		'aliqnac' => 'float',
		'aliqimp' => 'float',
		'aliqest' => 'float',
		'aliqmun' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'ex',
		'tabela',
		'aliqnac',
		'aliqimp',
		'ncm',
		'aliqest',
		'aliqmun',
		'codempresa'
	];
}
