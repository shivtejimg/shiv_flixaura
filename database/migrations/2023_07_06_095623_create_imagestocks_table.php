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
        Schema::create('imagestocks', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('categoryid');
            $table->string('title')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->decimal('finalprice', 8, 2)->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagestocks');
    }
};
