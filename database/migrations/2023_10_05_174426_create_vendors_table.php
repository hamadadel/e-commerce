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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('brand', 70);
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_img')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->$table->timestamps();

            /**
             * unique VS primary key
             * unique can be null but primary key can't be null
             */
            /**
             * Categories
             * ----------
             * $table->foreignId('parent_id')
             * ->constrained('categories', 'id);
             * ->nullOnDelete()
             * 
             * $table->string('name');
             * $table->string('slug')->unique();
             * $table->string('description')->nullable();
             * $table->enum('status', ['active', 'archived']);
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
