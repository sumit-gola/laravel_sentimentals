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
        Schema::create('produts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('slug')->nullable();
            $table->string('stock')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('size')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->string('visibility')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('summary')->nullable();
            $table->string('gallery')->nullable();
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' );
      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produts');
    }
};
