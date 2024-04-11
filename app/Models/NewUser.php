<?php

namespace App\Models; // Update the namespace to match Laravel conventions

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    use HasFactory;

    protected $table = 'laravel_crud'; // Ensure this table exists in your database

    protected $fillable = ['name', 'age', 'branch']; // Specify the fillable attributes
}
