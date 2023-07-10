<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topup extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','jurusan'];
    protected $table = 'topup';
    public $timestamps = false;
}
