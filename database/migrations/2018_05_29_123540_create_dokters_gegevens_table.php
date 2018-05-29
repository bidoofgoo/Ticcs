<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersGegevensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters_gegevens', function (Blueprint $table) {
            $table->increments('doktersid');
            $table->string('praktijk_adres');
            $table->string('telefoon');
            $table->uuid('userId');
            $table->timestamps();
        });

        Schema::table('dokters_gegevens', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokters_gegevens');
    }
}
