<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('booking_date');
            $table->unsignedBigInteger('flexibility_option_id');
            $table->foreign('flexibility_option_id')->references('id')->on('flexibility_options');
            $table->unsignedBigInteger('vehicle_size_option_id');
            $table->foreign('vehicle_size_option_id')->references('id')->on('vehicle_size_options');
            $table->datetime('booking_approved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
