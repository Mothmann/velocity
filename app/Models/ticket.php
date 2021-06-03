<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $guarded = [];


    public function user(){
        return $this->belongsto(User::class);
    }
}
