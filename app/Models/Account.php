<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $fillable = ['group_id', 'element_id', 'name', 'description'];


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




    public function getCodeAttribute()
    {
        $groupCount = $this->where('group_id', $this->group_id)->count();
        $code = $this->element_id . $this->group_id . $this->reference_id .$groupCount;

        return $code;
    }
}
