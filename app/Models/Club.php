<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function users(){
        return $this->belongsTo(Club::class, 'user_id');
    }
}
