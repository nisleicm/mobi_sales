<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nfse
 * 
 * @property int $id
 * @property string|null $numdfe
 * @property int|null $numrps
 * @property string|null $numlote
 * @property int|null $transacao
 * @property int|null $sittrib
 * @property int|null $sit
 * @property int|null $cnfse
 * @property string|null $seriep
 * @property string|null $idrpsnum
 * @property string|null $idrpsserie
 * @property int|null $idrpstipo
 * @property Carbon|null $emissao
 * @property Carbon|null $competencia
 * @property Carbon|null $datarps
 * @property int|null $natop
 * @property int|null $regesptrib
 * @property int|null $opsimplesnac
 * @property int|null $insentcult
 * @property float|null $pcargatrib
 * @property float|null $vcargatrib
 * @property float|null $pcargatribm
 * @property float|null $vcargatribm
 * @property float|null $pcargatribe
 * @property float|null $vcargatribe
 * @property int|null $ambente
 * @property string|null $outrasinf
 * @property string|null $provedor
 * @property string|null $rpssubnum
 * @property string|null $rpssubserie
 * @property int|null $rpssubt
 * @property float|null $vl_serv
 * @property float|null $vl_deduc
 * @property float|null $ppis
 * @property float|null $vpis
 * @property float|null $pcofins
 * @property float|null $vcofins
 * @property float|null $v_inss
 * @property float|null $v_ir
 * @property float|null $v_csll
 * @property int|null $issretido
 * @property float|null $vissretido
 * @property float|null $o_retenc
 * @property float|null $desc_incond
 * @property float|null $desc_condic
 * @property float|null $base_calc
 * @property float|null $aliquota
 * @property float|null $v_iss
 * @property float|null $sv_viss
 * @property int|null $respret
 * @property string|null $ilistaserv
 * @property string|null $s_codcnae
 * @property string|null $codtribm
 * @property string|null $s_descrim
 * @property string|null $cod_munic
 * @property string|null $ufprest
 * @property int|null $ex_iss
 * @property string|null $s_codpais
 * @property int|null $municip_inc
 * @property string|null $codprest
 * @property string|null $codtoma
 * @property int|null $codempresa
 * @property int|null $codintermid
 * @property int|null $q_parcela
 * @property int|null $condcao
 * @property int|null $qtde_serv
 * @property string|null $codobra
 * @property string|null $cc_art
 * @property string|null $xmlnfse
 * @property string|null $status_nfse
 * @property string|null $xmlnfsec
 * @property string|null $geradoxml
 * @property int|null $marcar
 * @property string|null $chave
 * @property string|null $end_xml
 *
 * @package App\Models
 */
class Nfse extends Model
{
	protected $table = 'nfse';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'numrps' => 'int',
		'transacao' => 'int',
		'sittrib' => 'int',
		'sit' => 'int',
		'cnfse' => 'int',
		'idrpstipo' => 'int',
		'emissao' => 'datetime',
		'competencia' => 'datetime',
		'datarps' => 'datetime',
		'natop' => 'int',
		'regesptrib' => 'int',
		'opsimplesnac' => 'int',
		'insentcult' => 'int',
		'pcargatrib' => 'float',
		'vcargatrib' => 'float',
		'pcargatribm' => 'float',
		'vcargatribm' => 'float',
		'pcargatribe' => 'float',
		'vcargatribe' => 'float',
		'ambente' => 'int',
		'rpssubt' => 'int',
		'vl_serv' => 'float',
		'vl_deduc' => 'float',
		'ppis' => 'float',
		'vpis' => 'float',
		'pcofins' => 'float',
		'vcofins' => 'float',
		'v_inss' => 'float',
		'v_ir' => 'float',
		'v_csll' => 'float',
		'issretido' => 'int',
		'vissretido' => 'float',
		'o_retenc' => 'float',
		'desc_incond' => 'float',
		'desc_condic' => 'float',
		'base_calc' => 'float',
		'aliquota' => 'float',
		'v_iss' => 'float',
		'sv_viss' => 'float',
		'respret' => 'int',
		'ex_iss' => 'int',
		'municip_inc' => 'int',
		'codempresa' => 'int',
		'codintermid' => 'int',
		'q_parcela' => 'int',
		'condcao' => 'int',
		'qtde_serv' => 'int',
		'marcar' => 'int'
	];

	protected $fillable = [
		'id',
		'numdfe',
		'numrps',
		'numlote',
		'transacao',
		'sittrib',
		'sit',
		'cnfse',
		'seriep',
		'idrpsnum',
		'idrpsserie',
		'idrpstipo',
		'emissao',
		'competencia',
		'datarps',
		'natop',
		'regesptrib',
		'opsimplesnac',
		'insentcult',
		'pcargatrib',
		'vcargatrib',
		'pcargatribm',
		'vcargatribm',
		'pcargatribe',
		'vcargatribe',
		'ambente',
		'outrasinf',
		'provedor',
		'rpssubnum',
		'rpssubserie',
		'rpssubt',
		'vl_serv',
		'vl_deduc',
		'ppis',
		'vpis',
		'pcofins',
		'vcofins',
		'v_inss',
		'v_ir',
		'v_csll',
		'issretido',
		'vissretido',
		'o_retenc',
		'desc_incond',
		'desc_condic',
		'base_calc',
		'aliquota',
		'v_iss',
		'sv_viss',
		'respret',
		'ilistaserv',
		's_codcnae',
		'codtribm',
		's_descrim',
		'cod_munic',
		'ufprest',
		'ex_iss',
		's_codpais',
		'municip_inc',
		'codprest',
		'codtoma',
		'codempresa',
		'codintermid',
		'q_parcela',
		'condcao',
		'qtde_serv',
		'codobra',
		'cc_art',
		'xmlnfse',
		'status_nfse',
		'xmlnfsec',
		'geradoxml',
		'marcar',
		'chave',
		'end_xml'
	];
}
