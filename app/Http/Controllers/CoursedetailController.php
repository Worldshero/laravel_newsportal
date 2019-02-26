<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursedetail;
use App\course;
use DB;
use Illuminate\Support\Facades\Input;
class CoursedetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=DB::table('details')->get();
        return view('Admin.HomeDetailValue')->with ('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $courses = DB::table('courses')->pluck('title', 'id');
       
        return view('Admin.CreateDetailValue',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required',
        //     // 'course_id'=> 'required',
        //   ]);
    
     $coursedet=new Coursedetail;
     $coursedet->title=$request->title;
     $coursedet->body=$request->body;
     $coursedet->course_id=$request->course_id;
     
    
     $coursedet->save();
     return  redirect()->route('detailvalue.create');
       

     
    }

    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        echo $id;
        exit;
        // return view('admin.showdetailvalue',compact('course'));
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
}
