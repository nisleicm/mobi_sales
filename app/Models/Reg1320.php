<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1320
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_bico
 * @property string|null $nr_interv
 * @property string|null $mot_interv
 * @property string|null $nom_interv
 * @property string|null $cnpj_interv
 * @property string|null $cpf_interv
 * @property float|null $val_fecha
 * @property float|null $val_abert
 * @property float|null $vol_aferi
 * @property float|null $vol_vendas
 *
 * @package App\Models
 */
class Reg1320 extends Model
{
	protected $table = 'reg_1320';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'val_fecha' => 'float',
		'val_abert' => 'float',
		'vol_aferi' => 'float',
		'vol_vendas' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_bico',
		'nr_interv',
		'mot_interv',
		'nom_interv',
		'cnpj_interv',
		'cpf_interv',
		'val_fecha',
		'val_abert',
		'vol_aferi',
		'vol_vendas'
	];
}
