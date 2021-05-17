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
            $table->boolean('pending_review');
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
