<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Coursedetail extends Model
{
    protected $table = 'details';


    // public function Courses()
    // {
    //    return  $this->belongsTo('App\course','course_id');
    // }
//     public function course()
// {
//     return $this->hasMany('courses');
// }

// for upper case in first latter  Sub_title & title
    public function setSubtitleAttribute($value)
    {
    return $this->attributes['Sub_title']= ucfirst($value);

    }
    public function setsubcatAttribute($value)
    {
    return $this->attributes['Sub_cat']= ucfirst($value);

    }


}
