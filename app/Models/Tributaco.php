<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tributaco
 * 
 * @property int $codigo
 * @property string $nome
 * @property float|null $aliq_icms
 * @property string|null $cfop
 * @property string|null $st
 * @property string|null $csosn
 * @property string|null $cst_icms
 * @property string|null $indice_pis
 * @property string|null $indice_cofins
 * @property float|null $aliq_icms_st
 * @property float|null $pfcp
 * @property float|null $pfcpst
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property int $codempresa
 * @property float|null $irrf
 * @property float|null $csll
 * @property float|null $inss
 * @property float|null $iss
 * @property string|null $issqn
 * @property int|null $justdesonera
 *
 * @package App\Models
 */
class Tributaco extends Model
{
	protected $table = 'tributacoes';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'aliq_icms' => 'float',
		'aliq_icms_st' => 'float',
		'pfcp' => 'float',
		'pfcpst' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'irrf' => 'float',
		'csll' => 'float',
		'inss' => 'float',
		'iss' => 'float',
		'justdesonera' => 'int'
	];

	protected $fillable = [
		'nome',
		'aliq_icms',
		'cfop',
		'st',
		'csosn',
		'cst_icms',
		'indice_pis',
		'indice_cofins',
		'aliq_icms_st',
		'pfcp',
		'pfcpst',
		'codloja',
		'datamov',
		'codempresa',
		'irrf',
		'csll',
		'inss',
		'iss',
		'issqn',
		'justdesonera'
	];
}
