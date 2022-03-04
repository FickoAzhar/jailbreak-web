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
            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('lokasi')->unique();
            $table->string('image')->nullable();
            $table->text('deskripsi');
            $table->integer('price')->nullable();
            $table->integer('year_built');
            $table->string('sertificate')->nullable();
            $table->integer('tot_floors');
            $table->integer('luas');
            $table->string('facility');
            $table->integer('bedroom');
            $table->integer('bathroom');
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
