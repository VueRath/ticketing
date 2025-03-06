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
        Schema::create('flight_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airlines_id')->constrained('airlines');
            $table->foreignId('destinations_id')->constrained();
            $table->string('airline_name');
            $table->string('destination_name');
            $table->string('name');
            $table->integer('count_people');
            $table->integer('amount');
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
        Schema::dropIfExists('flight_users');
    }
};
