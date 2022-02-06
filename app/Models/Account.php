<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $fillable = ['group_id', 'name', 'description'];


    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    
    public function father()
    {
        return $this->hasMany(Account::class, 'reference_id');
    }


    public function child()
    {
        return $this->belongsTo(Account::class, 'reference_id');
    }
}
