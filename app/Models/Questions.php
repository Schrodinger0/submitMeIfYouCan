<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "age",
        "q1",
        "q2",
        "q3",
        "q4",
        "q5"

    ];
}
