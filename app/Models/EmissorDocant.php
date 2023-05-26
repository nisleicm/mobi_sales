<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmissorDocant
 * 
 * @property int $id
 * @property int|null $idcte
 * @property string|null $idemissor
 * @property int $codempresa
 *
 * @package App\Models
 */
class EmissorDocant extends Model
{
	protected $table = 'emissor_docant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'idcte' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'idcte',
		'idemissor'
	];
}
