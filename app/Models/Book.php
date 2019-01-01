<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function categlories()
    {
        return $this->hasMany(Categlory::class);
    }
}
