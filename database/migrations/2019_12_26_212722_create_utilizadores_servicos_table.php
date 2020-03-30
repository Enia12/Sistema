<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilizadoresHasTbservicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utilizadores_tbservicos', function(Blueprint $table)
		{
			$table->integer('Utilizadores_idutilizador')->index('fk_Utilizadores_servicos_Utilizadores1_idx');
			$table->integer('servicos_idTbservicos');
	
			
			
			$table->primary(['Utilizadores_idutilizador','servicos_idTbservicos']);
			$table->index(['servicos_idservicos'], 'fk_Utilizadores_servicos_servicos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('utilizadores_servicos');
	}

}
