<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NcmUf
 * 
 * @property string $id
 * @property string $uf
 * @property float|null $nacionalfederal
 * @property float|null $importadosfederal
 * @property float|null $imposto_estadual
 * @property float|null $imposto_municipal
 * @property string|null $descricao
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class NcmUf extends Model
{
	protected $table = 'ncm_uf';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nacionalfederal' => 'float',
		'importadosfederal' => 'float',
		'imposto_estadual' => 'float',
		'imposto_municipal' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'uf',
		'nacionalfederal',
		'importadosfederal',
		'imposto_estadual',
		'imposto_municipal',
		'descricao',
		'codempresa'
	];
}
