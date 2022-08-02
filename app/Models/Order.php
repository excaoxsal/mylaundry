<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'consument_id', 'machine_id', 'status','berat'
    ];
    protected $table="orders";
    public function orders ()
    {
        return $this-> belongsTo('App\Models\Washmachine','id','machine_id');
    }
}
