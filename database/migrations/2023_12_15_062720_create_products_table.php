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
            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');
            $table->string('photo');
            $table->string('price');
            $table->integer('type');
            $table->integer('category_id')->nullable();
            $table->integer('status')->nullable();
            $table->integer('owner_id')->nullable();
            $table->date('date')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_en')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
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
