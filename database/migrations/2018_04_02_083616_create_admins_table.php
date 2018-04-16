<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 50);
            $table->tinyInteger('category_id');
            $table->enum('privilege', ['lomba','sekre','humas','juri']);
            $table->string('username', 20);
            $table->string('password');
            $table->string('email', 50);
            $table->string('is_login');
            $table->datetime('last_login_at');
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
        Schema::dropIfExists('admins');
    }
}
