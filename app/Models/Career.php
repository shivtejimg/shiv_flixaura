<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'careers';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'job_title',
        'address',
        'bio',
        'resumefile',
       
        
    ];
}
