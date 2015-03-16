<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCacheWarcraftCharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cache_warcraft_characters', function(Blueprint $table)
		{
			/** Fields */
			$table->timestamps();
			$table->char('region', 2);
			$table->string('realm', 25);
			$table->string('name', 12);
			$table->string('fields', 255)->nullable();

			/** Keys */
			$table->primary(['region', 'realm', 'name', 'fields']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cache_warcraft_characters');
	}

}
