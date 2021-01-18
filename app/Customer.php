<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable {

    protected $fillable = [
        'name', 'email', 'username', 'password','email_verfied_at'
  ];
  protected $hidden = [
       'password', 'remember_token'
  ];
  
  public function setPasswordAttribute($val)
  {
       return $this->attributes['password'] = bcrypt($val);
  }
    
    }