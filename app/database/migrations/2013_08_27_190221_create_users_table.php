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
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->integer('key')->unique();
            $table->string('hash');
            $table->string('ircName');
            $table->string('spokenName');
            $table->string('addedBy');
            $table->integer('dateCreated');
            $table->integer('isAdmin');
            $table->integer('lastLogin');
            $table->integer('isActive');
            $table->timestamps();
        });
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