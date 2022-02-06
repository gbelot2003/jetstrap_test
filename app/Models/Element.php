<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $timestamp = false;


    public function groups()
    {
        return $this->hasMany(Group::class, 'element_id');
    }
}

