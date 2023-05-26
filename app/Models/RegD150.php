<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD150
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mun_orig
 * @property string|null $cod_mun_dest
 * @property string|null $veic_id
 * @property string|null $viagem
 * @property string|null $ind_tfa
 * @property float|null $vl_peso_tx
 * @property float|null $vl_tx_terr
 * @property float|null $vl_tx_red
 * @property float|null $vl_out
 * @property float|null $vl_tx_adv
 *
 * @package App\Models
 */
class RegD150 extends Model
{
	protected $table = 'reg_d150';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_peso_tx' => 'float',
		'vl_tx_terr' => 'float',
		'vl_tx_red' => 'float',
		'vl_out' => 'float',
		'vl_tx_adv' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mun_orig',
		'cod_mun_dest',
		'veic_id',
		'viagem',
		'ind_tfa',
		'vl_peso_tx',
		'vl_tx_terr',
		'vl_tx_red',
		'vl_out',
		'vl_tx_adv'
	];
}
