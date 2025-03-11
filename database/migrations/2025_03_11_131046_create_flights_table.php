<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airlines_id');
            $table->unsignedBigInteger('destination_id');
            $table->string('departure'); // Departure city/airport
            $table->string('destination'); // Destination city/airport
            $table->date('departure_date');
            $table->date('return_date')->nullable();
            $table->integer('passenger_limit');
            $table->string('class_type'); // Economy, Business, etc.
            $table->decimal('price', 10, 2);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('airlines_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
