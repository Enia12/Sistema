<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Utilizadore
 * 
 * @property int $idutilizador
 * @property string $nome
 * @property int $telefone
 * @property string $Email
 * @property string $password
 * @property string $remember_token
 * @property int $Activo
 *
 * @package App\Models
 */
class Utilizadore extends Model
{
	protected $table = 'utilizadores';
	protected $primaryKey = 'idutilizador';
	public $timestamps = false;

	protected $casts = [
		'telefone' => 'int',
		'Activo' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'nome',
		'telefone',
		'Email',
		'password',
		'remember_token',
		'Activo'
	];
}
