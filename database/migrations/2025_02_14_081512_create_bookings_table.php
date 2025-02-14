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
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->boolean('is_paid')->default(false); // Payment status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}