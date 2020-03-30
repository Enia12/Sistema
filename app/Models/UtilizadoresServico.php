<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UtilizadoresServico
 * 
 * @property int $utilizadores_pfk
 * @property int $servico_pfk
 * @property int $servicos_tbclientes_pfk
 *
 * @package App\Models
 */
class UtilizadoresServico extends Model
{
	protected $table = 'utilizadores_servicos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'utilizadores_pfk' => 'int',
		'servico_pfk' => 'int',
		'servicos_tbclientes_pfk' => 'int'
	];
}
