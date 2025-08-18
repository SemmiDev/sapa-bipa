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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->text('user_agent')->nullable();
            $table->string('url');
            $table->string('method', 10)->default('GET');
            $table->string('country', 2)->nullable();
            $table->string('city')->nullable();
            $table->timestamp('visited_at');
            $table->timestamps();
            
            // Indexes for better performance
            $table->index('ip_address');
            $table->index('visited_at');
            $table->index(['ip_address', 'visited_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
