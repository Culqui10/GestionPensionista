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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->double('total');
            $table->date('date');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('pensioner_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->foreign('pensioner_id')->references('id')->on('pensioners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
