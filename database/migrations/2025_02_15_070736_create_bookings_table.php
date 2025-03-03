<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users');  // Foreign key referencing the users table
            $table->foreignId('service_id')->constrained('services'); // Foreign key referencing the services table
            $table->foreignId('staff_id')->constrained('users');     // Foreign key referencing the users table (staff)
            $table->dateTime('booking_date');
            $table->integer('duration'); // Duration in hours
            $table->enum('booking_status', ['pending', 'approved', 'rejected'])->default('pending'); 
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending');
            $table->enum('payment_method', ['credit_card', 'paypal', 'cash', 'bank_transfer'])->default('credit_card');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}