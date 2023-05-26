<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QtdeMesa
 * 
 * @property int|null $Quantidade
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class QtdeMesa extends Model
{
	protected $table = 'qtde_mesas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Quantidade' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'Quantidade',
		'codempresa'
	];
}
