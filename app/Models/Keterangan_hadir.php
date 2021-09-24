<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan_hadir extends Model
{
    use HasFactory;
    protected $table = 'status_hadir';
    // protected $fillable = ['title', 'start_date', 'end_date'];
    protected $guarded = [];
    public $timestamp = false;
}
