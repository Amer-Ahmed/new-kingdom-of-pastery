<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id')->index();
            $table->unsignedBigInteger('area_id')->index();
            $table->string('name_ar');
            $table->string('name_en');
            $table->integer('service_type_id');
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->LongText('address_description')->nullable();
            $table->string('first_phone');
            $table->string('second_phone');
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
        Schema::dropIfExists('branches');
    }
}
