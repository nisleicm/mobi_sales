<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CstPi
 * 
 * @property string|null $codigo_cst_pis
 * @property string|null $descricao
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class CstPi extends Model
{
	protected $table = 'cst_pis';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo_cst_pis',
		'descricao',
		'codempresa'
	];
}
