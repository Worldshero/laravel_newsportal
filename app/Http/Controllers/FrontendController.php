<?php

namespace App\Http\Controllers;
use DB;
use App\Coursedetail;
use App\course;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $courses=DB::table('courses')->get();
        
        // $results = Coursedetail::with('crsjoin')->get();
// echo $results;
// exit;
        
        return view ('newsportal.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
    $courseDetails=Coursedetail::where('course_id',$id)->get();
    
    return view('newsportal.detail',compact('courseDetails'));
     }
      
    
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showFrontend($id)
     {
    
     $courseDetailsShow=Coursedetail::where('id',$id)->value('Sub_title');
      $lists=Coursedetail::where('id',$id)->value('Sub_cat');
    
    //   print_r($lists);
    //   exit;

     return view('newsportal.detailcontainer',compact('courseDetailsShow' ,'lists'));
      }



}