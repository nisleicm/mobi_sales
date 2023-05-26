<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TabCest
 * 
 * @property string $cest
 * @property string|null $ncm
 * @property string|null $descricao
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class TabCest extends Model
{
	protected $table = 'tab_cest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cest',
		'ncm',
		'descricao',
		'datamov',
		'codempresa'
	];
}
