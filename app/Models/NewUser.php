<?php

namespace App\Models; // Update the namespace to match Laravel conventions

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    use HasFactory;

    protected $table = 'laravel_crud'; 

    protected $fillable = ['name', 'age', 'branch']; 
}
