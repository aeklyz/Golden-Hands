<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->text('description'); // Description of the reward
            $table->integer('points'); // Points associated with the reward
            $table->boolean('is_redeemable')->default(true); // If the reward can be redeemed
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade'); // Foreign key to the users table
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewards');
    }
};
