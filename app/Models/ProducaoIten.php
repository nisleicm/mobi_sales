<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProducaoIten
 * 
 * @property int $codigo
 * @property string|null $codproduto
 * @property float|null $qtde
 * @property int|null $tipo_na_producao
 * @property int|null $codigo_producao
 * @property int|null $movimento_estoque
 * @property float|null $qtde_unidade_aux
 * @property int|null $cod_unid_aux
 * @property int $codempresa
 *
 * @package App\Models
 */
class ProducaoIten extends Model
{
	protected $table = 'producao_itens';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'tipo_na_producao' => 'int',
		'codigo_producao' => 'int',
		'movimento_estoque' => 'int',
		'qtde_unidade_aux' => 'float',
		'cod_unid_aux' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'qtde',
		'tipo_na_producao',
		'codigo_producao',
		'movimento_estoque',
		'qtde_unidade_aux',
		'cod_unid_aux',
		'codempresa'
	];
}
