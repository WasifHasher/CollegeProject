<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    public $timestamps = true;
    protected $guarded = [];

    public function product(){
        return $this->hasMany(product::class);
    }

}
