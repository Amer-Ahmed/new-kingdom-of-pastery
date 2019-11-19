<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->index();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('image');
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->double('price_ar', 8, 2);
            $table->double('price_en', 8, 2);
            $table->double('calories_ar', 8, 2)->nullable();
            $table->double('calories_en', 8, 2)->nullable();
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
        Schema::dropIfExists('items');
    }
}
