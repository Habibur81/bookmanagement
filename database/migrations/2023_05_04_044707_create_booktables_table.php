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
        Schema::create('booktables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('pname')->nullable();
            $table->string('age')->nullable();
            $table->string('date')->nullable();
            $table->string('page')->nullable();
            $table->string('booktype')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booktables');
    }
};
