<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('location');
            $table->string('photo');
            $table->boolean('sent_for_review');
            //Of deze is ingezonden voor review
            $table->boolean('approved')->nullable();
            //Betekenis van approved veld:
                //null = not yet reviewed (moet nog gekeurd worden door de admin)
                //true = approved (wordt op de site geplaatst)
                //false = refused (wordt teruggestuurd naar de gebruiker voor heroverweging)

            $table->string('review_refused_reason')->nullable(); //Reden waarom hij is afgewezen
            $table->boolean('active');
            $table->string('description');
            $table->timestamps();
            // user_id, label, location, photo, description
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
