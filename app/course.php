<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
        'Category', 'img_url', 'Cat_title',
    ];

    // public function details()
    // {
    // return $this->belongsTo('details');
    // // ->select(array('id','name','mobile','email','min_order','order_before','station_distance','station','opening_time','closing_time','status','marking','backup_restro','irctc_status','email','security_deposit','review_count','address'));
    // } 

// for upper case in first latter  body & title   
public function setCattitleAttribute($value)
{
return $this->attributes['Cat_title']= ucfirst($value);

}
public function setCategoryAttribute($value)
{
return $this->attributes['Category']= ucfirst($value);

}



}
