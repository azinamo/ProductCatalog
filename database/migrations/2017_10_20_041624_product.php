<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 255);
            $table->string('sku', 255)->nullable();
            $table->string('status', 30);
            $table->decimal('price', 15, 2)->nullable();
            $table->unsignedTinyInteger('quality_approved');
            $table->mediumText('image_url')->nullable();
            $table->string('brand', 255)->nullable();
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
        //
    }
}
