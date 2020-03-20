<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            
            $table->bigIncrements('id_app');
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('tshirt');
            $table->string('abt_urslf');
            $table->string('why_aup');
            $table->string('team');
            $table->string('cv');
            $table->string('github');
            $table->string('linkedin');
            $table->string('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
