<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Mass Assignment
    protected $fillable = ['title','body'];
    //one to many(Invers)
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){
        return $this->attributes['title'] = $value;
        return $this->attributes['slug'] = str_slug($value);
    }
}
