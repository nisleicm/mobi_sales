<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CsosnCfop
 * 
 * @property string|null $cfop
 * @property string|null $tipo
 * @property string|null $csosn
 * @property string|null $cst
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class CsosnCfop extends Model
{
	protected $table = 'csosn_cfop';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cfop',
		'tipo',
		'csosn',
		'cst',
		'codempresa'
	];
}
