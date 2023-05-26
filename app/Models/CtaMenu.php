<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtaMenu
 * 
 * @property int|null $men_codigo
 * @property string|null $men_nome
 * @property int|null $men_codigopai
 * @property int|null $men_existe
 * @property int $codempresa
 *
 * @package App\Models
 */
class CtaMenu extends Model
{
	protected $table = 'cta_menus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'men_codigo' => 'int',
		'men_codigopai' => 'int',
		'men_existe' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'men_codigo',
		'men_nome',
		'men_codigopai',
		'men_existe',
		'codempresa'
	];
}
