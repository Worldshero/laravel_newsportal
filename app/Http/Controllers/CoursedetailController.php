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
        $crs= DB::table('courses')->pluck('title', 'id');
        $courses=DB::table('details')->get();
        return view('Admin.HomeDetailValue')->with('courses',$courses)->with('crs',$crs );



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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'course_id'=> 'required',
          ]);
    
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
        $showdetail= Coursedetail::find($id);

    return view('admin.showdetailvalue',compact('showdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crs = DB::table('courses')->pluck('title', 'id');
        $editdetail=Coursedetail::find($id);

        return view('admin.editdetailvalue',compact('editdetail'))->with('crs',$crs );
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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'course_id' => 'required',
        ]);
  
        $editdetail->update($request->all());
        echo $editdetail;
        exit;
  
    //     return redirect()->route('detailvalue.index')
    //                     ->with('success','Product updated successfully');
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
