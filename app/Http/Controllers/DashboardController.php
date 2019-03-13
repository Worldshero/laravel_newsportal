<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursedetail;
use DB;
use App\course;
class DashboardController extends Controller
{
    //Write your function Here

    public function BarGraph()
    {

    //       $courses = DB::table('details')->distinct()->get(['course_id']);
    //       $crs = json_decode($courses, true);

    //     // print_r( $crs);
        $colData = DB::table('courses')->pluck('Category');
        $crs = json_decode($colData, true);
        return view('admin.layout.dashboard',compact('crs'));
// print_r($crs);
    //     $count=count($colData);
    //   //print_r($count);






    }




}
