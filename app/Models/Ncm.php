<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ncm
 * 
 * @property string $ncm
 * @property string|null $descricao
 * @property string|null $unidade
 * @property int|null $codigo
 * @property string|null $ex
 * @property int|null $tabela
 * @property float|null $nacional
 * @property float|null $importado
 * @property float|null $estadual
 * @property float|null $municipal
 * @property string|null $unidexp
 * @property float|null $aliqnacional
 *
 * @package App\Models
 */
class Ncm extends Model
{
	protected $table = 'ncm';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'tabela' => 'int',
		'nacional' => 'float',
		'importado' => 'float',
		'estadual' => 'float',
		'municipal' => 'float',
		'aliqnacional' => 'float'
	];

	protected $fillable = [
		'ncm',
		'descricao',
		'unidade',
		'codigo',
		'ex',
		'tabela',
		'nacional',
		'importado',
		'estadual',
		'municipal',
		'unidexp',
		'aliqnacional'
	];
}
