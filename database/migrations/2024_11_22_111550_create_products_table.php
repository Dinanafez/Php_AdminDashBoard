<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // عمود Name
            $table->text('description')->nullable(); // عمود Description
            $table->decimal('price', 10, 2); // عمود Price
            $table->unsignedBigInteger('category_id'); // عمود CategoryID
            $table->string('image_url')->nullable(); // عمود ImageURL
            $table->integer('quantity'); // عمود Quantity
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
