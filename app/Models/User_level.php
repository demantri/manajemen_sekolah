<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_level extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = [];

    public $timestamps = false;
}
