<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CstIpi
 * 
 * @property string|null $codigo_cst
 * @property string|null $tributacao_ipi
 * @property string|null $aliq_ipi
 * @property string|null $vl_bc_ipi
 * @property string|null $descricao
 * @property string|null $es
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class CstIpi extends Model
{
	protected $table = 'cst_ipi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo_cst',
		'tributacao_ipi',
		'aliq_ipi',
		'vl_bc_ipi',
		'descricao',
		'es',
		'codempresa'
	];
}
