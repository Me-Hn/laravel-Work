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
        Schema::create('playbox', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Column to store name
            $table->string('f_name'); // Column to store score
            $table->string('email'); // Column to store score
            $table->integer('std_id'); // Column to store score
            $table->string('pass'); // Column to store score
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playbox');
    }
};
