<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Washmachine extends Model
{
    use HasFactory;
    protected $fillable = [
        'typemesin', 'status','pengguna'
    ];
    protected $table="washmachine";
}
