<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbcliente
 * 
 * @property int $idClientes
 * @property string $NomeCli
 * @property string $EnderecoCli
 * @property string $TelefoneCli
 * @property string $EmailCli
 * @property string $morada
 *
 * @package App\Models
 */
class Tbcliente extends Model
{
	protected $table = 'tbclientes';
	protected $primaryKey = 'idClientes';
	public $timestamps = false;

	protected $fillable = [
		'NomeCli',
		'EnderecoCli',
		'TelefoneCli',
		'EmailCli',
		'morada'
	];
}
