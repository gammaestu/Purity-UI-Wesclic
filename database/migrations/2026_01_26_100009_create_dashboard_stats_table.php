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
        Schema::create('dashboard_stats', function (Blueprint $table) {
            $table->id();
            $table->string('stat_key')->unique();
            $table->string('label');
            $table->decimal('value', 15, 2);
            $table->string('change_percentage')->nullable();
            $table->string('change_type')->nullable(); // positive, negative
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard_stats');
    }
};
