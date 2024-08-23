<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locale extends Model
{
    use HasFactory;


    protected $table = "locale";


    protected $fillable = [
        'road',
        'neighborhood',
        'number',
        'cep',
        'city',
        'state',
        'country',
    ];   
}