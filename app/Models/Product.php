<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, HasUlids;
    protected $fileable = ['name','amount', 'status']; 

    public function variants()
    {
        return $this->belongsToMany(Variant::class);
    }
}
