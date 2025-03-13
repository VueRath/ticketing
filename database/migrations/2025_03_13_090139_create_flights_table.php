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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airlines_id')->constrained('airlines');
            $table->foreignId('destinations_id')->constrained();
            $table->string('departure');
            $table->string('destination');
            $table->date('departure_date');
            $table->date('return_date')->nullable();
            $table->integer('passenger_limit');
            $table->string('class_type'); 
            $table->decimal('price', 10, 2);
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
        Schema::dropIfExists('flights');
    }
};
