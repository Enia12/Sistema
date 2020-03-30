<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbagendamento
 * 
 * @property int $Codagenda
 * @property Carbon $DataAgenda
 * @property string $Hora
 * @property string $idservico
 * @property int $idclientes
 *
 * @package App\Models
 */
class Tbagendamento extends Model
{
	protected $table = 'tbagendamento';
	protected $primaryKey = 'Codagenda';
	public $timestamps = false;

	protected $casts = [
		'idclientes' => 'int'
	];

	protected $dates = [
		'DataAgenda'
	];

	protected $fillable = [
		'DataAgenda',
		'Hora',
		'idservico',
		'idclientes'
	];
}
