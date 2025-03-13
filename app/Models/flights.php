<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    use HasFactory;


    /*
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
    */
    protected $fillable = 
    [

    ];
}
