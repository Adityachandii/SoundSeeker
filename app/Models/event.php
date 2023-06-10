<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\transaction;

class event extends Model
{
    use HasFactory;
    public function transaction(){
        return $this->hasMany(transaction::class);
    }
}
