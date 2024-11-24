<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pep extends Model
{
    use HasFactory;
    protected $fillable = ['Fname', 'Lname', 'password'];
    protected $hidden = ['password'];

}