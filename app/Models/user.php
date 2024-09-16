<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use app\Models\User;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = true;

    // protected $table = 'users';

// Below Relationship I make for the about page. OnetoMany Relationship

   public function about(){
    return $this->hasMany(about::class);
   }

   // Below Relationship I make for the order page. OnetoMany Relationship
   public function order(){
    return $this->hasMany(order::class);
   }
   
   // Below Relationship I make for the order page. OnetoMany Relationship
   public function slider(){
    return $this->hasMany(slider::class);
   }
  
  


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
