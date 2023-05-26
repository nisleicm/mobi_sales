<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC165
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part
 * @property string|null $veic_id
 * @property string|null $cod_aut
 * @property string|null $nr_passe
 * @property string|null $hora
 * @property float|null $temper
 * @property string|null $qtd_vol
 * @property float|null $peso_brt
 * @property float|null $peso_liq
 * @property string|null $nom_mot
 * @property string|null $cpf
 * @property string|null $uf_id
 *
 * @package App\Models
 */
class RegC165 extends Model
{
	protected $table = 'reg_c165';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'temper' => 'float',
		'peso_brt' => 'float',
		'peso_liq' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part',
		'veic_id',
		'cod_aut',
		'nr_passe',
		'hora',
		'temper',
		'qtd_vol',
		'peso_brt',
		'peso_liq',
		'nom_mot',
		'cpf',
		'uf_id'
	];
}
