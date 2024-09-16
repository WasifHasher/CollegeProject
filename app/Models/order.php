<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = "orders";
    public $timestamps = false;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class);
    }


}