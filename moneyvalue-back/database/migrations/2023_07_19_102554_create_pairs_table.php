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
        Schema::create('pairs', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->float('rate', 8, 2);
            $table->integer('count') ->default(0);

            $table->foreign('from')->references('currency')->on('currencies')->onDelete('cascade');
            $table->foreign('to')->references('currency')->on('currencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pairs');
    }
};
