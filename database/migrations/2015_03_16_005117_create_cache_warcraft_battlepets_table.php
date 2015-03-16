<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCacheWarcraftBattlepetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cache_warcraft_battlepets', function(Blueprint $table)
		{
			/** Fields */
			$table->timestamps();
			$table->smallInteger('species')->unsigned();
			$table->tinyInteger('level')->unsigned();
			$table->tinyInteger('breed')->unsigned();
			$table->tinyInteger('quality')->unsigned();

			/** Keys */
			$table->primary(['species', 'level', 'breed', 'quality']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cache_warcraft_battlepets');
	}

}
