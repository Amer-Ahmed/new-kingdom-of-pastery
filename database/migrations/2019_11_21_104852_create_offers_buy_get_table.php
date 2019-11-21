<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersBuyGetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers_buy_get', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('offer_id')->index();
            $table->integer('buy_quantity');
            $table->unsignedBigInteger('buy_category_id')->index();
            $table->unsignedBigInteger('buy_item_id')->index();
            $table->integer('get_quantity');
            $table->unsignedBigInteger('get_category_id')->index();
            $table->unsignedBigInteger('get_item_id')->index();
            $table->integer('offer_price');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
            $table->foreign('buy_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('buy_item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('get_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('get_item_id')->references('id')->on('items')->onDelete('cascade');
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
        Schema::dropIfExists('offers_buy_get');
    }
}
