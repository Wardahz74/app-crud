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
      Schema::create('sellers', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('phone');
    $table->string('registration_number');
    $table->string('ntn');
    $table->string('province');
    $table->string('sandbox_token')->nullable();
    $table->string('production_token')->nullable();
    $table->string('environment');
    $table->text('address')->nullable();
    $table->json('scenarios')->nullable(); // ✅ to save multiple sale scenarios
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
