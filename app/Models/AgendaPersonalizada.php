<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgendaPersonalizada
 * 
 * @property int $id
 * @property int|null $resourceid
 * @property int|null $parentid
 * @property string|null $caption
 * @property Carbon|null $start_age
 * @property Carbon|null $finish
 * @property int|null $state
 * @property int|null $actualfinish
 * @property int|null $actualstart
 * @property int|null $eventtype
 * @property int|null $labelcolor
 * @property string|null $location
 * @property string|null $messagem
 * @property int|null $options
 * @property int|null $recurrenceindex
 * @property string|null $recurrenceinfo
 * @property Carbon|null $reminderdate
 * @property int|null $reminderminutesbeforestart
 * @property string|null $reminderresourcesdata
 * @property int|null $taskcompletefield
 * @property int|null $taskindexfield
 * @property string|null $tasklinksfield
 * @property int|null $taskstatusfield
 * @property int|null $groupid
 * @property int $codempresa
 *
 * @package App\Models
 */
class AgendaPersonalizada extends Model
{
	protected $table = 'agenda_personalizada';
	public $timestamps = false;

	protected $casts = [
		'resourceid' => 'int',
		'parentid' => 'int',
		'start_age' => 'datetime',
		'finish' => 'datetime',
		'state' => 'int',
		'actualfinish' => 'int',
		'actualstart' => 'int',
		'eventtype' => 'int',
		'labelcolor' => 'int',
		'options' => 'int',
		'recurrenceindex' => 'int',
		'reminderdate' => 'datetime',
		'reminderminutesbeforestart' => 'int',
		'taskcompletefield' => 'int',
		'taskindexfield' => 'int',
		'taskstatusfield' => 'int',
		'groupid' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'resourceid',
		'parentid',
		'caption',
		'start_age',
		'finish',
		'state',
		'actualfinish',
		'actualstart',
		'eventtype',
		'labelcolor',
		'location',
		'messagem',
		'options',
		'recurrenceindex',
		'recurrenceinfo',
		'reminderdate',
		'reminderminutesbeforestart',
		'reminderresourcesdata',
		'taskcompletefield',
		'taskindexfield',
		'tasklinksfield',
		'taskstatusfield',
		'groupid'
	];
}
