<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleEnviosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_envios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('correo_id')->unsigned();
			$table->integer('envio_id')->unsigned();
			$table->timestamps();

			//$table->foreign('correo_id')->references('id')->on('correos');
			//$table->foreign('envio_id')->references('id')->on('envios');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_envios');
	}

}
