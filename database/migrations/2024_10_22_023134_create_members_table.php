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
        Schema::create('members', function (Blueprint $table) {
            $table->id('id_member');
            $table->string('name', 100);
            $table->string('phone', 20)->unique();
            $table->string('email', 50)->unique();
            $table->string('address', 255)->nullable();
            $table->char('gender', 1)->check("gender in ('M', 'F')");
            $table->date('membership_start');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
