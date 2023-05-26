<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000023
 * 
 * @property string $codigo
 * @property string|null $tributado
 * @property float|null $ac
 * @property float|null $al
 * @property float|null $am
 * @property float|null $ap
 * @property float|null $ba
 * @property float|null $ce
 * @property float|null $df
 * @property float|null $es
 * @property float|null $go
 * @property float|null $ma
 * @property float|null $mg
 * @property float|null $ms
 * @property float|null $mt
 * @property float|null $pa
 * @property float|null $pb
 * @property float|null $pe
 * @property float|null $pi
 * @property float|null $pr
 * @property float|null $rj
 * @property float|null $rn
 * @property float|null $ro
 * @property float|null $rr
 * @property float|null $rs
 * @property float|null $sc
 * @property float|null $se
 * @property float|null $sp
 * @property float|null $toc
 * @property float|null $ex
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000023 extends Model
{
	protected $table = 'c000023';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ac' => 'float',
		'al' => 'float',
		'am' => 'float',
		'ap' => 'float',
		'ba' => 'float',
		'ce' => 'float',
		'df' => 'float',
		'es' => 'float',
		'go' => 'float',
		'ma' => 'float',
		'mg' => 'float',
		'ms' => 'float',
		'mt' => 'float',
		'pa' => 'float',
		'pb' => 'float',
		'pe' => 'float',
		'pi' => 'float',
		'pr' => 'float',
		'rj' => 'float',
		'rn' => 'float',
		'ro' => 'float',
		'rr' => 'float',
		'rs' => 'float',
		'sc' => 'float',
		'se' => 'float',
		'sp' => 'float',
		'toc' => 'float',
		'ex' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tributado',
		'ac',
		'al',
		'am',
		'ap',
		'ba',
		'ce',
		'df',
		'es',
		'go',
		'ma',
		'mg',
		'ms',
		'mt',
		'pa',
		'pb',
		'pe',
		'pi',
		'pr',
		'rj',
		'rn',
		'ro',
		'rr',
		'rs',
		'sc',
		'se',
		'sp',
		'toc',
		'ex'
	];
}
