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
        Schema::create('solicitations', function (Blueprint $table) {
            $table->uuid("uuid")->primary();

            $table->foreignId("user_id")->references("id")
                ->on("users")->CascadeOnUpdate()->CascadeOnDelete();

            $table->string("wallet_id")->nullable();
            $table->foreign("wallet_id")->references("uuid")
                ->on("wallets")->CascadeOnUpdate()->CascadeOnDelete();

            $table->string("description")->nullable();
            $table->double("requested_balance");
            $table->double("rate")->nullable();
            $table->string("deadline")->nullable();
            $table->string("status")->nullable();
            $table->string("date")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitations');
    }
};
