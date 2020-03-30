<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable


{
    protected $table = 'utilizadores';
	protected $primaryKey = 'idutilizador';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idutilizador' => 'int',
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
