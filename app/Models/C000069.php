<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000069
 * 
 * @property string|null $xcodproduto
 * @property string|null $xproduto
 * @property float|null $xqtde
 * @property float|null $xvalor
 * @property float|null $xtotal
 * @property string|null $xunidade
 * @property string|null $xcodos
 * @property string|null $xcodigo
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000069 extends Model
{
	protected $table = 'c000069';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'xqtde' => 'float',
		'xvalor' => 'float',
		'xtotal' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'xcodproduto',
		'xproduto',
		'xqtde',
		'xvalor',
		'xtotal',
		'xunidade',
		'xcodos',
		'xcodigo',
		'codempresa'
	];
}
