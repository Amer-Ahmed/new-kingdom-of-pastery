<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('item_id')->index();
            $table->unsignedBigInteger('extra_id')->index()->nullable();
            $table->string('service_type');
            $table->unsignedBigInteger('address_id');
            $table->datetime('date');
            $table->integer('item_quantity');
            $table->integer('extra_quantity')->nullable();
            $table->double('price_ar');
            $table->double('price_en');
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('created_by')->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('extra_id')->references('id')->on('extras')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
