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
        Schema::create('books', function (Blueprint $table) {
            $table->id('id_book');
            $table->string('title', 100);
            $table->string('author', 50)->nullable();
            $table->string('publisher', 50)->nullable();
            $table->integer('stock')->check('stock >= 0');
            $table->integer('publication_year')->check('publication_year >= 1000 AND publication_year <= extract(year from now())');
            $table->string('isbn', 13)->unique()->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories', 'id_category')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
