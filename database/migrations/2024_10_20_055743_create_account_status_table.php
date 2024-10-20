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
        Schema::create('account_status', function (Blueprint $table) {
            $table->id();
            $table->double('current_balance');
            $table->string('status');
            $table->timestamps();
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('pensioner_id');
            $table->unsignedBigInteger('consumption_id');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('pensioner_id')->references('id')->on('pensioners');
            $table->foreign('consumption_id')->references('id')->on('consumptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_status');
    }
};
