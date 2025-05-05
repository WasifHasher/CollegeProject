<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    public $timestamps = false;
    protected $guarded = [];

    public function product(){
        return $this->hasMany(product::class);
    }

    





}
