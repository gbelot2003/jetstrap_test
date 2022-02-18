<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'date'];

    /**
     * Relación con AccountBook
     */
    public function transaction()
    {
        return $this->hasMany(AccountBook::class, 'book_id', 'id');
    }
}
