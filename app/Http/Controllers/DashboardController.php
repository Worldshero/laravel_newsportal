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
      $course= course::pluck('Category','id');
       $courseDetails= DB::table('details')
                 ->select('course_id', DB::raw('count(*) as total'))
                 ->groupBy('course_id')
                 ->get();
               $catDetails=array();
                 $TotleDetails=array();
                           foreach($courseDetails as $Detail)
                            {
                 array_push($catDetails, $course[$Detail->course_id]) ;
                 array_push($TotleDetails, $Detail->total) ;
                             }

                    return view('admin.layout.dashboard',compact('catDetails','TotleDetails'));

                }




            }
