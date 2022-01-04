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
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->mediumText('desc')->nullable();
            $table->string('SKU', 100)->nullable();
            $table->integer('size')->nullable();
            $table->string('brand', 100)->nullable();
            $table->json('img')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('inventory_id')->unsigned()->nullable();
            $table->bigInteger('price');
            $table->softDeletes();
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
