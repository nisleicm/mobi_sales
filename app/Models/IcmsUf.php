<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IcmsUf
 * 
 * @property string $uf
 * @property float|null $icms
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class IcmsUf extends Model
{
	protected $table = 'icms_uf';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'icms' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'uf',
		'icms',
		'codempresa'
	];
}
