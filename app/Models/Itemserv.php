<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Itemserv
 * 
 * @property int $codigo
 * @property string|null $descricao
 * @property string|null $item_list_serv
 * @property string|null $cod_serv
 * @property string|null $codlcserv
 * @property float|null $vl_deduc
 * @property string|null $xjustdeduc
 * @property float|null $aliq_reduc
 * @property float|null $vl_reduc
 * @property float|null $descincod
 * @property float|null $desccond
 * @property int|null $tipounidade
 * @property string|null $unid
 * @property int|null $qtde
 * @property float|null $vl_unit
 * @property int|null $qtde_diaria
 * @property float|null $vl_tx_turismo
 * @property float|null $vl_total
 * @property float|null $base_calc
 * @property float|null $aliquota
 * @property float|null $valor_iss
 * @property float|null $vl_is_ret
 * @property float|null $aliqissst
 * @property float|null $v_issst
 * @property float|null $valorbccsll
 * @property float|null $aliqretcsll
 * @property float|null $valorcsll
 * @property float|null $valorbcpis
 * @property float|null $aliqretpis
 * @property float|null $valorpis
 * @property float|null $vl_bccofins
 * @property float|null $aliqretcofins
 * @property float|null $valorcofins
 * @property float|null $valorbcinss
 * @property float|null $aliqretinss
 * @property float|null $valorinss
 * @property float|null $vl_bcretirrf
 * @property float|null $aliqretirrf
 * @property float|null $valorirrf
 * @property int|null $tributavel
 * @property int|null $tribmunprest
 * @property string|null $codmunprest
 * @property int|null $sittribut
 * @property int|null $codnfse
 * @property int|null $codenpresa
 *
 * @package App\Models
 */
class Itemserv extends Model
{
	protected $table = 'itemserv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'vl_deduc' => 'float',
		'aliq_reduc' => 'float',
		'vl_reduc' => 'float',
		'descincod' => 'float',
		'desccond' => 'float',
		'tipounidade' => 'int',
		'qtde' => 'int',
		'vl_unit' => 'float',
		'qtde_diaria' => 'int',
		'vl_tx_turismo' => 'float',
		'vl_total' => 'float',
		'base_calc' => 'float',
		'aliquota' => 'float',
		'valor_iss' => 'float',
		'vl_is_ret' => 'float',
		'aliqissst' => 'float',
		'v_issst' => 'float',
		'valorbccsll' => 'float',
		'aliqretcsll' => 'float',
		'valorcsll' => 'float',
		'valorbcpis' => 'float',
		'aliqretpis' => 'float',
		'valorpis' => 'float',
		'vl_bccofins' => 'float',
		'aliqretcofins' => 'float',
		'valorcofins' => 'float',
		'valorbcinss' => 'float',
		'aliqretinss' => 'float',
		'valorinss' => 'float',
		'vl_bcretirrf' => 'float',
		'aliqretirrf' => 'float',
		'valorirrf' => 'float',
		'tributavel' => 'int',
		'tribmunprest' => 'int',
		'sittribut' => 'int',
		'codnfse' => 'int',
		'codenpresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'descricao',
		'item_list_serv',
		'cod_serv',
		'codlcserv',
		'vl_deduc',
		'xjustdeduc',
		'aliq_reduc',
		'vl_reduc',
		'descincod',
		'desccond',
		'tipounidade',
		'unid',
		'qtde',
		'vl_unit',
		'qtde_diaria',
		'vl_tx_turismo',
		'vl_total',
		'base_calc',
		'aliquota',
		'valor_iss',
		'vl_is_ret',
		'aliqissst',
		'v_issst',
		'valorbccsll',
		'aliqretcsll',
		'valorcsll',
		'valorbcpis',
		'aliqretpis',
		'valorpis',
		'vl_bccofins',
		'aliqretcofins',
		'valorcofins',
		'valorbcinss',
		'aliqretinss',
		'valorinss',
		'vl_bcretirrf',
		'aliqretirrf',
		'valorirrf',
		'tributavel',
		'tribmunprest',
		'codmunprest',
		'sittribut',
		'codnfse',
		'codenpresa'
	];
}
