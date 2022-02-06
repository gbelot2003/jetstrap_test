<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $fillable = ['group_id', 'element_id', 'reference_id', 'code', 'name', 'description'];


    protected static function boot()
    {
        parent::boot();

        static::creating(function($query){
            $groupCount = $query->where('group_id', $query->group_id)->count();
            $code = $query->element_id . $query->group_id . $query->reference_id .$groupCount;
            $query->code = $code;
        });
    }


    public function element()
    {
        return $this->belongsTo(Element::class, 'element_id');
    }


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
