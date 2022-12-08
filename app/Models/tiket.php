<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function film(){
        return $this->belongsTo(film::class);
    }
}
