<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbservicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbservicos', function(Blueprint $table)
		{
			$table->integer('idservicos', true);
			$table->string('problema', 500);
		
			$table->string('descricao', 500);
			$table->string('tecnico', 100);
			$table->string('situacao', 50);
			$table->string('equipamento', 200);
			$table->date('data');
			$table->decimal('valor',10,2);
		   
			$table->integer('idClientes',11);
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicos');
	}

}
