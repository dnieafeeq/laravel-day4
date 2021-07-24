<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fail extends Model
{
    use HasFactory;
    protected $fillable = [
        'filename',
        'file_path'
    ];
    public function katalog()
    {
        return $this->belongsTo(Katalog::class);
    }
}
