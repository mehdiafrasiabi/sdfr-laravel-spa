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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('tag')->nullable();
            $table->string('course_time');
            $table->string('meeting_time');
            $table->bigInteger('price')->default(0);
            $table->longText('description')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->string('p_code')->nullable()->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
