<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competitor extends Model
{
    use HasFactory;


    protected $table = "competitor";


    protected $fillable = [
        'name',
        'age',
        'height',
        'weight',
        'gender',
        'cpf',
        'rg',
        'team',
    ];   
}