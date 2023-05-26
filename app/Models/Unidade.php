<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidade
 * 
 * @property string $unidade
 * @property string|null $descricao
 * @property string|null $uni_nfe
 * @property int $codempresa
 *
 * @package App\Models
 */
class Unidade extends Model
{
	protected $table = 'unidade';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'uni_nfe'
	];
}
