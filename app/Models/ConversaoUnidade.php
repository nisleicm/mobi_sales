<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConversaoUnidade
 * 
 * @property int $id
 * @property string $codproduto
 * @property string|null $un_origem
 * @property string|null $un_destino
 * @property float|null $fator
 * @property string|null $tipo
 * @property int $codempresa
 * 
 * @property C000025 $c000025
 *
 * @package App\Models
 */
class ConversaoUnidade extends Model
{
	protected $table = 'conversao_unidade';
	public $timestamps = false;

	protected $casts = [
		'fator' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'un_origem',
		'un_destino',
		'fator',
		'tipo'
	];

	public function c000025()
	{
		return $this->belongsTo(C000025::class, 'codproduto');
	}
}
