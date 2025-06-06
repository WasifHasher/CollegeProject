<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = "products";
    public $timestamps = false;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function rating(){
        return $this->belongsTo(rating::class);
    }

  
    public function Newfunction()
    {
        return $this->belongsTo(category::class);
    }
    
    


}
