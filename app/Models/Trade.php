<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

   
    protected $fillable = ['book_id', 'account_id', 'debit', 'credit'];
     
   
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }


    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
