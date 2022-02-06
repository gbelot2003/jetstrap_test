<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $timestamp = false;

    
    public function element()
    {
        return $this->belongsTo(Element::class, 'element_id');
    }


    public function accounts()
    {
        return $this->hasMany(Account::class, 'group_id');
    }

    
}
