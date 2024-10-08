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
        Schema::create('peluang_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('materi')->nullable();
            $table->foreignId('topik_id')->constrained('topik_models')->onDelete('cascade');
            $table->string('isi')->nullable();
            $table->string('status')->default('draft');
            $table->string('image')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable();
            $table->string('url')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peluang_models');
    }
};
