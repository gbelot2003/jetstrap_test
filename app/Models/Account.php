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

        static::saving(function($query){
            $element = $query->element_id;
            $group = Group::where('id', $query->group_id)->first()->code;

            if (!is_null($query->reference_id)){
                $ref = Account::where('id', $query->reference_id)->first();
                $groupCount = $ref->code;

                $refCount = $query
                ->where('element_id', $query->element_id)
                ->where('group_id', $query->group_id)
                ->where('reference_id', $query->reference_id)
                ->count();

                $query->code = $groupCount . $refCount + 1;

            } else {

                $groupCount = $query
                ->where('element_id', $query->element_id)
                ->where('group_id', $query->group_id)
                ->whereNull('reference_id')
                ->count();

                $query->code = $element . $group . $groupCount;
            }

        });
    }


    public function element()
    {
        return $this->belongsTo(Element::class, 'element_id');
    }


    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
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
