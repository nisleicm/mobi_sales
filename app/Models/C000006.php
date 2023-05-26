<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000006
 * 
 * @property string $codigo
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $ibge
 * @property string|null $estado
 * @property string|null $municipio
 * @property float|null $pfcpufdest
 * @property float|null $picmsufdest
 * @property float|null $picmsinter
 * @property float|null $picmsinterpart
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000006 extends Model
{
	protected $table = 'c000006';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pfcpufdest' => 'float',
		'picmsufdest' => 'float',
		'picmsinter' => 'float',
		'picmsinterpart' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cidade',
		'uf',
		'cep',
		'ibge',
		'estado',
		'municipio',
		'pfcpufdest',
		'picmsufdest',
		'picmsinter',
		'picmsinterpart',
		'codempresa'
	];
}
