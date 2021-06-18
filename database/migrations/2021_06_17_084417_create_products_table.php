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
    //UP method them cac bang, cac cot hoac cac chi muc moi vao database
    public function up() 
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->text('detail');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // DOWN method dao nguoc cac phuong thuc duoc thuc hien boi UP method
    public function down() 
    {
        Schema::dropIfExists('products');
    }
}
