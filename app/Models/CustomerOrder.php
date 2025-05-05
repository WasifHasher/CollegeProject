<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $table = 'customer_orders';
    public $timestamps = true;
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(product::class);
    }

  
    
}
