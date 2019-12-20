<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
     
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'username' => 'demo',
                'email' => 'test@email.com',
                'password' => '$2y$10$BbDOOWOvm6KfKWwolRKz4OMLPfD2FOVxdBLzi/cdkDhPya1k.XA9C', //123456
                'first_name' => 'Test',
                'last_name' => 'User',
                'role_id' => 1,
                'created_at'=> '2019-12-15 16:34:34',
                'updated_at'=> '2019-12-15 16:34:34'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
