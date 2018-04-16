<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 50);
            $table->tinyInteger('category_id');
            $table->string('username', 20);
            $table->string('password');
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
        Schema::dropIfExists('juries');
    }
}
