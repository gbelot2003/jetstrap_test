<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBook extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'account_id', 'debit', 'credit'];


    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }


    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
