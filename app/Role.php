<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'user_id'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
