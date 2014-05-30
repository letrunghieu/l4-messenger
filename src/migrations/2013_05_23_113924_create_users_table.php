<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('users')){
			Schema::create('users', function($table){
				$table->increments('id');
				$table->string('username', 30)->unique();
				$table->string('firstname', 30);
				$table->string('surname', 30);
				$table->string('password', 30);
				$table->string('email', 30)->unique();
				$table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
