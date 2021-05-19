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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('public')->default(1);
            $table->string('phoneNumber')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('usertype')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //Hier komt de aanvullende informatie die op de profielpagina wordt getoond
            $table->string('workExperience')->nullable(); //de werkervaring van de betreffende gebruiker
            $table->string('smallBiography')->nullable(); //beschrijving over hoe de betreffende gebruiker is begonnen met zijn werk.
            $table->string('motivation')->nullable(); //beschrijving over wat de betreffende gebruiker motiveert, om zijn werk te doen.
            $table->string('interests')->nullable(); //beschrijving waarom gebruiker het vak hem zo intresseert.
            $table->string('hobbies')->nullable(); //hobbies van gebruiker
            $table->string('function')->nullable(); //Functietitel van gebruiker

            //Profile social links
            $table->string('website')->nullable(); //website van gebruiker
            $table->string('twitter')->nullable(); //website van gebruiker
            $table->string('instagram')->nullable(); //website van gebruiker
            $table->string('facebook')->nullable(); //website van gebruiker
        });
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
