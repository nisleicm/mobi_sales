<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocsO
 * 
 * @property int $codigo
 * @property string $codos
 * @property string $chavedoc
 * @property int $tipodoc
 * @property int $codempresa
 *
 * @package App\Models
 */
class DocsO extends Model
{
	protected $table = 'docs_os';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'tipodoc' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codos',
		'chavedoc',
		'tipodoc',
		'codempresa'
	];
}
