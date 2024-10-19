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
        Schema::table('playbox', function (Blueprint $table) {
            $table->string('gender')->nullable()->before('created_at'); // Add gender column
            $table->string('course')->nullable()->before('created_at'); // Add course column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('playbox', function (Blueprint $table) {
            //
        });
    }
};
