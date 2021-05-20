<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->decimal('price'); //3 euro
            $table->string('per_unit'); // KG/g/stuks
            $table->integer('amount'); // aantal van het product
            $table->string('photo');
            $table->boolean('sent_for_review')->nullable();
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
