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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nullable();
            $table->string('name');
            $table->string('contact_no')->nullable();
            $table->dateTime('start_at');
            $table->dateTime('end_at')->nullable();
            $table->bigInteger('user_in');
            $table->bigInteger('user_out')->nullable();
            $table->integer('total_time')->nullable();
            $table->decimal('amount', 8, 2)->default(0.00);
            $table->integer('discount')->default(0);
            $table->string('note')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
