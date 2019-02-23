<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=DB::table('courses')->get();
        
        
     return view ('newsportal.index')->with ('courses',$courses);;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsportal.course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $request->validate([
    //          'title' => 'required',
    //          'body' => 'required',
    //         'img_url' => 'required',
    //     ]);
  
    //     $course=new course;
   
    //  $course->img_url=$request->img_url;
    //  $course->save();
    //  return redirect()->back()->with('success', 'Todo has been Created Successfully');



$this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'img_url' => 'required',
        'img_url' => 'image|max:1999'
      ]);

  //save data for title and body
     $course=new course;
    $course->title=$request->title;
     $course->body=$request->body;
     


      // Get filename with extension
      $filenameWithExt = $request->file('img_url')->getClientOriginalName();

    //   // Get just the filename
       $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       

    //   // Get extension
      $extension = $request->file('img_url')->getClientOriginalExtension();

    //   // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

    //   // Uplaod image
      $path= $request->file('img_url')->storeAs('public/img', $filenameToStore);

    
     $course->img_url=$filenameToStore;
     $course->save();
     return redirect ('newsportal/course');


     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
