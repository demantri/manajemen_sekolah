<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'detail_absensi';
    // protected $fillable = ['title', 'start_date', 'end_date'];
    protected $guarded = [];
    public $timestamp = false;
}
