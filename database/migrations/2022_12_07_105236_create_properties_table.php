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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('location_id')->constrained('locations')->restrictOnDelete()->nullable();
            $table->foreignId('project_id')->constrained('projects')->restrictOnDelete()->nullable();
            $table->string('details');
            $table->string('image')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('khotian_image')->nullable();
            $table->string('status')->default('active');
            $table->integer('price');
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
