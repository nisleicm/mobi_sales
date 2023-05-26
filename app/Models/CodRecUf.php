<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CodRecUf
 * 
 * @property int $codigo
 * @property string|null $cod_rec
 * @property string|null $desc_cod_rec
 * @property Carbon|null $dataini
 * @property Carbon|null $datafim
 *
 * @package App\Models
 */
class CodRecUf extends Model
{
	protected $table = 'cod_rec_uf';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'dataini' => 'datetime',
		'datafim' => 'datetime'
	];

	protected $fillable = [
		'cod_rec',
		'desc_cod_rec',
		'dataini',
		'datafim'
	];
}
