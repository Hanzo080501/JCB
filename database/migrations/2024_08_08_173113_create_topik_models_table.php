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
        Schema::create('topik_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamp('published_at')->nullable();
            $table->string('published_by')->nullable();
            $table->string('slug')->unique();
            $table->string('status')->default('draft');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topik_models');
    }
};
