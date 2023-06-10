<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\event;

class transaction extends Model
{
    use HasFactory;

    public function event(){
        return $this->hasMany(event::class);
    }
}
