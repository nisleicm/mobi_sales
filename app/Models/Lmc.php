<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lmc
 * 
 * @property int $codigo
 * @property int|null $tanque
 * @property int|null $bomba
 * @property int|null $bico
 * @property int|null $abertura
 * @property int|null $encerrante
 * @property int|null $combustivel
 * @property Carbon|null $data
 * @property float|null $preco
 * @property float|null $quantidade
 * @property float|null $total
 * @property int|null $situacao
 * @property int|null $nr_nota
 * @property string|null $notafiscal1
 * @property string|null $notafiscal2
 * @property string|null $notafiscal3
 * @property string|null $notafiscal4
 * @property int|null $quantnf1
 * @property int|null $quantnf2
 * @property int|null $quantnf3
 * @property int|null $quantnf4
 * @property int|null $bico1
 * @property int|null $bico2
 * @property int|null $bico3
 * @property int|null $bico4
 * @property int|null $bico5
 * @property int|null $bico6
 * @property int|null $bico7
 * @property int|null $bico8
 * @property int|null $aber_bico1
 * @property int|null $aber_bico2
 * @property int|null $aber_bico3
 * @property int|null $aber_bico4
 * @property int|null $aber_bico5
 * @property int|null $aber_bico6
 * @property int|null $aber_bico7
 * @property int|null $aber_bico8
 * @property int|null $enc_bico1
 * @property int|null $enc_bico2
 * @property int|null $enc_bico3
 * @property int|null $enc_bico4
 * @property int|null $enc_bico5
 * @property int|null $enc_bico6
 * @property int|null $enc_bico7
 * @property int|null $enc_bico8
 * @property int|null $afer_bico1
 * @property int|null $afer_bico2
 * @property int|null $afer_bico3
 * @property int|null $afer_bico4
 * @property int|null $afer_bico5
 * @property int|null $afer_bico6
 * @property int|null $afer_bico7
 * @property int|null $afer_bico8
 * @property int|null $qtevend_1
 * @property int|null $qtevend_2
 * @property int|null $qtevend_3
 * @property int|null $qtevend_4
 * @property int|null $qtevend_5
 * @property int|null $qtevend_6
 * @property int|null $qtevend_7
 * @property int|null $qtevend_8
 * @property float|null $totalvend_1
 * @property float|null $totalvend_2
 * @property float|null $totalvend_3
 * @property float|null $totalvend_4
 * @property float|null $totalvend_5
 * @property float|null $totalvend_6
 * @property float|null $totalvend_7
 * @property float|null $totalvend_8
 * @property int|null $estoq_abertura
 * @property int|null $estoq_escritural
 * @property int|null $estoq_fechamento
 * @property int|null $perda_sobra
 * @property string|null $observacao
 * @property int|null $pagina
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Lmc extends Model
{
	protected $table = 'lmc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'tanque' => 'int',
		'bomba' => 'int',
		'bico' => 'int',
		'abertura' => 'int',
		'encerrante' => 'int',
		'combustivel' => 'int',
		'data' => 'datetime',
		'preco' => 'float',
		'quantidade' => 'float',
		'total' => 'float',
		'situacao' => 'int',
		'nr_nota' => 'int',
		'quantnf1' => 'int',
		'quantnf2' => 'int',
		'quantnf3' => 'int',
		'quantnf4' => 'int',
		'bico1' => 'int',
		'bico2' => 'int',
		'bico3' => 'int',
		'bico4' => 'int',
		'bico5' => 'int',
		'bico6' => 'int',
		'bico7' => 'int',
		'bico8' => 'int',
		'aber_bico1' => 'int',
		'aber_bico2' => 'int',
		'aber_bico3' => 'int',
		'aber_bico4' => 'int',
		'aber_bico5' => 'int',
		'aber_bico6' => 'int',
		'aber_bico7' => 'int',
		'aber_bico8' => 'int',
		'enc_bico1' => 'int',
		'enc_bico2' => 'int',
		'enc_bico3' => 'int',
		'enc_bico4' => 'int',
		'enc_bico5' => 'int',
		'enc_bico6' => 'int',
		'enc_bico7' => 'int',
		'enc_bico8' => 'int',
		'afer_bico1' => 'int',
		'afer_bico2' => 'int',
		'afer_bico3' => 'int',
		'afer_bico4' => 'int',
		'afer_bico5' => 'int',
		'afer_bico6' => 'int',
		'afer_bico7' => 'int',
		'afer_bico8' => 'int',
		'qtevend_1' => 'int',
		'qtevend_2' => 'int',
		'qtevend_3' => 'int',
		'qtevend_4' => 'int',
		'qtevend_5' => 'int',
		'qtevend_6' => 'int',
		'qtevend_7' => 'int',
		'qtevend_8' => 'int',
		'totalvend_1' => 'float',
		'totalvend_2' => 'float',
		'totalvend_3' => 'float',
		'totalvend_4' => 'float',
		'totalvend_5' => 'float',
		'totalvend_6' => 'float',
		'totalvend_7' => 'float',
		'totalvend_8' => 'float',
		'estoq_abertura' => 'int',
		'estoq_escritural' => 'int',
		'estoq_fechamento' => 'int',
		'perda_sobra' => 'int',
		'pagina' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'tanque',
		'bomba',
		'bico',
		'abertura',
		'encerrante',
		'combustivel',
		'data',
		'preco',
		'quantidade',
		'total',
		'situacao',
		'nr_nota',
		'notafiscal1',
		'notafiscal2',
		'notafiscal3',
		'notafiscal4',
		'quantnf1',
		'quantnf2',
		'quantnf3',
		'quantnf4',
		'bico1',
		'bico2',
		'bico3',
		'bico4',
		'bico5',
		'bico6',
		'bico7',
		'bico8',
		'aber_bico1',
		'aber_bico2',
		'aber_bico3',
		'aber_bico4',
		'aber_bico5',
		'aber_bico6',
		'aber_bico7',
		'aber_bico8',
		'enc_bico1',
		'enc_bico2',
		'enc_bico3',
		'enc_bico4',
		'enc_bico5',
		'enc_bico6',
		'enc_bico7',
		'enc_bico8',
		'afer_bico1',
		'afer_bico2',
		'afer_bico3',
		'afer_bico4',
		'afer_bico5',
		'afer_bico6',
		'afer_bico7',
		'afer_bico8',
		'qtevend_1',
		'qtevend_2',
		'qtevend_3',
		'qtevend_4',
		'qtevend_5',
		'qtevend_6',
		'qtevend_7',
		'qtevend_8',
		'totalvend_1',
		'totalvend_2',
		'totalvend_3',
		'totalvend_4',
		'totalvend_5',
		'totalvend_6',
		'totalvend_7',
		'totalvend_8',
		'estoq_abertura',
		'estoq_escritural',
		'estoq_fechamento',
		'perda_sobra',
		'observacao',
		'pagina',
		'codempresa'
	];
}
