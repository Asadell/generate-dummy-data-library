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
        Schema::create('loans', function (Blueprint $table) {
            $table->id('id_loan');
            $table->text('description')->nullable();
            $table->date('loan_date');
            $table->date('due_date');
            $table->date('return_date')->nullable();
            $table->foreignId('member_id')->constrained('members', 'id_member')->onDelete('cascade');
            $table->foreignId('book_id')->constrained('books', 'id_book')->onDelete('cascade');
            $table->foreignId('librarian_id')->nullable()->constrained('librarians', 'id_librarian')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
