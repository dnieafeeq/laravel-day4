<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    public function katalogs()
    {
        return $this->hasMany(Fail::class);
    }
}
