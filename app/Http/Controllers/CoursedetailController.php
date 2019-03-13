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
        // $crsval= DB::table('courses')->pluck('id', 'Category');
        $courses=DB::table('details')->get();
        return view('Admin.Coursedetail.HomeDetailValue')->with('courses',$courses);
        //->with('crsval',$crsval );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $courses = DB::table('courses')->pluck('Category', 'id');

        return view('Admin.Coursedetail.CreateDetailValue',compact('courses'));
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
            'Sub_cat' => 'required|unique:details',
            'Sub_title' => 'required',
            'course_id'=> 'required',
          ]);

     $coursedet=new Coursedetail;
     $coursedet->Sub_cat=$request->Sub_cat;
     $coursedet->Sub_title=$request->Sub_title;
     $coursedet->course_id=$request->course_id;


     $coursedet->save();
     return  redirect()->route('detailvalue.index');



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

    return view('Admin.Coursedetail.showDetailValue',compact('showdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crs = DB::table('courses')->pluck('Category', 'id');
        $editdetail=Coursedetail::find($id);

        return view('admin.coursedetail.editdetailvalue',compact('editdetail'))->with('crs',$crs );
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
            'Sub_cat' => 'required|unique:details',
            'Sub_title' => 'required',
            'course_id' => 'required',
        ]);
        $coursedet=Coursedetail::find($id);
       $coursedet->Sub_cat=$request->Sub_cat;
       $coursedet->Sub_title=$request->Sub_title;
       $coursedet->course_id=$request->course_id;
       $coursedet->save();
       return  redirect()->route('detailvalue.index');

     }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deldetail=Coursedetail::find($id);

     $deldetail->delete();
     return  redirect()->route('detailvalue.index');
    }
}
