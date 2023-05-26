<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ListaContratante
 * 
 * @property int $id
 * @property int|null $tipo_doc
 * @property string|null $doc
 * @property int|null $idmdfe
 * @property int $codempresa
 *
 * @package App\Models
 */
class ListaContratante extends Model
{
	protected $table = 'lista_contratante';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'tipo_doc' => 'int',
		'idmdfe' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tipo_doc',
		'doc',
		'idmdfe'
	];
}
