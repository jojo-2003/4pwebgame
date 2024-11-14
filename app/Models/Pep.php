<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pep extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'username', 'password'];
    protected $hidden = ['password'];

}
