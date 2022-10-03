<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tocality extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','content'];
}
