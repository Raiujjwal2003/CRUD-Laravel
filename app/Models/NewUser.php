<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    use HasFactory;

    protected $table = 'laravel_crud'; 

    protected $fillable = ['name', 'age', 'branch','title','isDelete']; 
}
