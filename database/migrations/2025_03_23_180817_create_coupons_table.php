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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->enum('type', ['fixed', 'percent']);
            $table->unsignedBigInteger('value');
            $table->unsignedInteger('limit')->default(1);
            $table->unsignedBigInteger('min_purchase')->default(0);
            $table->dateTime('expires_at');
            $table->boolean('is_active')->default(true);
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); // فقط برای کاربر خاص
            $table->boolean('is_public')->default(true); // عمومیه یا خصوصی
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
