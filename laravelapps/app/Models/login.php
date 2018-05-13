<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'username', 'password',
    ];
  
}