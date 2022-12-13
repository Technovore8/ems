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
<<<<<<< HEAD
            $table->foreignID('user_id')->constrained('users')->restrictOnDelete()->nullable();
            $table->foreignId('property_id')->constrained('properties')->restrictOnDelete()->nullable();
=======
            $table->foreignID('user_id')->constrained('users')->restrictOnDelete();
            $table->foreignId('property_id')->constrained('properties')->restrictOnDelete();
>>>>>>> 18bb5042ce96df365280c72cec8fd3bcd20c0dc9
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
