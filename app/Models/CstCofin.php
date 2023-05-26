<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CstCofin
 * 
 * @property string|null $codigo_cst_cofins
 * @property string|null $descricao
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class CstCofin extends Model
{
	protected $table = 'cst_cofins';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo_cst_cofins',
		'descricao',
		'codempresa'
	];
}
