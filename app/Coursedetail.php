<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coursedetail extends Model
{
    protected $table = 'details';


    // public function Courses()
    // {
    //    return  $this->belongsTo('App\course','course_id');
    // }
    public function Store()
    {
    return $this->belongsTo('App\course','course_id');
    // ->select(array('id','name','mobile','email','min_order','order_before','station_distance','station','opening_time','closing_time','status','marking','backup_restro','irctc_status','email','security_deposit','review_count','address'));
    } 
}
