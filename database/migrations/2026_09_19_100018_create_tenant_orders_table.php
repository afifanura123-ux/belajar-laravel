<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tenant_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignId('order_id')->constrained('orders');
            $table->bigInteger('subtotal')->default(0);
            $table->bigInteger('commission_amount')->default(0);
            $table->bigInteger('total_amount')->default(0);
            $table->timestamps();

            $table->unique(['tenant_id', 'order_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant_orders');
    }
};
