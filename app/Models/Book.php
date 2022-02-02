<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    
    protected $fillable = ['account_id', 'description', 'debit', 'credit'];

    
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
