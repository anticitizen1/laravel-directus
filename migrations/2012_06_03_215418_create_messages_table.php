<?php

class Directus_Create_Messages_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_messages', function($table)
		{
			$table->increments('id');

			$table->integer('user_id');
			$table->string('table')->nullable();
			$table->integer('row')->nullable();
			$table->text('content')->nullable();
		
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_messages');
	}

}