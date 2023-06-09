<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'first_name', 'last_name', 'email'
    ];
}
