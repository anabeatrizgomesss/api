<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    use HasFactory;


    protected $table = "trainer";


    protected $fillable = [
        'name',
        'age',
        'height',
        'weight',
        'cpf',
        'rg',
    ];   
}