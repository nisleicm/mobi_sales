<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutosPerigososCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $clase_risco
 * @property string|null $numero_onu
 * @property string|null $grupo_embalagem
 * @property string|null $ponto_fulgor
 * @property string|null $nome_apropriado
 * @property float|null $quant_tot_prod
 * @property float|null $quant_tip_vol
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class ProdutosPerigososCte extends Model
{
	protected $table = 'produtos_perigosos_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quant_tot_prod' => 'float',
		'quant_tip_vol' => 'float',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'clase_risco',
		'numero_onu',
		'grupo_embalagem',
		'ponto_fulgor',
		'nome_apropriado',
		'quant_tot_prod',
		'quant_tip_vol',
		'filtro',
		'codempresa'
	];
}
