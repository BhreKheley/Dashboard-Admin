<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function tiket(){
        return $this->hasMany(tiket::class);
    }
}
