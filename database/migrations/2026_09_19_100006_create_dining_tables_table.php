<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dining_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->string('table_number');
            $table->string('status');
            $table->timestamps();

            $table->unique(['tenant_id', 'table_number']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dining_tables');
    }
};
