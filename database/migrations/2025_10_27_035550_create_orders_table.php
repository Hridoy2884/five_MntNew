<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->decimal('grand_total', 10, 2)->default(0);
            $table->string('currency', 10)->default('CAD');
            $table->string('payment_method')->nullable();
            $table->enum('payment_status', ['pending','paid','failed','refunded'])->default('pending');
            $table->decimal('shipping_amount', 10, 2)->default(0);
            $table->string('shipping_method')->nullable();
            $table->enum('status', ['pending','processing','shipped','delivered','cancelled'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
