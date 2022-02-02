<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    
    protected $fillable = ['name', 'code', 'reference_id'];


    public function childs()
    {
        return $this->hasMany(Account::class, 'reference_id');
    }

    
    public function parent()
    {
        return $this->belongsTo(Account::class, 'reference_id');
    }


    public function books()
    {
        return $this->hasMany(Book::class, 'account_id');
    }

}
