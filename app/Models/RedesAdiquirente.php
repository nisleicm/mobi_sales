<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RedesAdiquirente
 * 
 * @property string $indice
 * @property string $codnome
 * @property string $nome
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class RedesAdiquirente extends Model
{
	protected $table = 'redes_adiquirentes';
	protected $primaryKey = 'indice';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codnome',
		'nome',
		'codempresa'
	];
}
