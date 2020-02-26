<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name', 100);
            $table->decimal('price', 10, 2);
            $table->integer('availability');
            $table->timestamps();
        });

        DB::table('products')->insert([
            ['name' => 'Laptop', 'price' => 2500.00, 'availability' => 3],
            ['name' => 'Telewizor', 'price' => 999.99, 'availability' => 5],
            ['name' => 'Drukarka', 'price' => 100.00, 'availability' => 7],
            ['name' => 'Myszka', 'price' => 14.00, 'availability' => 8],
            ['name' => 'Klawiatura', 'price' => 50.99, 'availability' => 3],
            ['name' => 'Telefon', 'price' => 100.00, 'availability' => 5],
            ['name' => 'Tablet', 'price' => 666.66, 'availability' => 1],
            ['name' => 'E-book', 'price' => 246.49, 'availability' => 9],
            ['name' => 'Monitor', 'price' => 4000.00, 'availability' => 50],
            ['name' => 'Słuchawki', 'price' => 99.00, 'availability' => 4],
            ['name' => 'Głośniki', 'price' => 340.99, 'availability' => 3],
            ['name' => 'Projektor', 'price' => 1200.00, 'availability' => 3],
        ]);
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
