<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Servico
 * 
 * @property int $idservico
 * @property string $descricao
 * @property string $tecnico
 * @property string $situacao
 * @property string $problema
 * @property string $equipamento
 * @property Carbon $data
 * @property float $valor
 * @property int $idclientes
 *
 * @package App\Models
 */
class Servico extends Model
{
	protected $table = 'servicos';
	protected $primaryKey = 'idservico';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'idclientes' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'descricao',
		'tecnico',
		'situacao',
		'problema',
		'equipamento',
		'data',
		'valor',
		'idclientes'
	];


	 public function search(Array $data)
	{
		$servicos= $this->where(function ($query) use ($data){
			if(isset($data['idutilizador']))//veriificar se id e igual a da bd
			$query->where('idutilizador',$data['idutilizador']);
			if(isset($data['situacao']))
		$query->where('situacao',$data['situacao']);
			//if(isset($data['equipamento']))
		//	$query->where('equipamento',$data['equipamento']);
			if(isset($data['tecnico']))
			$query->where('tecnico',$data['tecnico']);
			if(isset($data['data']))
			$query->where('data',$data['data']);
		


		});
	    return $servicos;
	}
}
