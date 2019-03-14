<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\course;
use DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::table('courses')->paginate(10);

        return view('Admin.course.homecourse')->with('courses', $courses);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.course.createcourse');
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
            'Category' => 'required|unique:courses',
            'Cat_title' => 'required',
            'img_url' => 'required',
            'img_url' => 'image|max:1999',
        ]);

        //save data for title and body
        $course = new course;
        $course->Category = $request->Category;
        $course->Cat_title = $request->Cat_title;

        // Get filename with extension
        $filenameWithExt = $request->file('img_url')->getClientOriginalName();

        //   // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //   // Get extension
        $extension = $request->file('img_url')->getClientOriginalExtension();

        //   // Create new filename
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        //   // Uplaod image
        $path = $request->file('img_url')->storeAs('public/img', $filenameToStore);

        $course->img_url = $filenameToStore;

        $course->save();
        return redirect('course')->with('success', 'Todo has been Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showdetail = course::find($id);

        return view('admin.course.Showcourse', compact('showdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $updcourse = course::find($id);

        return view('admin.course.editcourse', compact('updcourse'));
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
            'Category' => 'required|unique:courses',
            'Cat_title' => 'required',
            'img_url' => 'required',
        ]);
        $updcourse = course::find($id);
        $updcourse->Cat_title = $request->Cat_title;
        $updcourse->Category = $request->Category;

        // Get filename with extension
        $filenameWithExt = $request->file('img_url')->getClientOriginalName();

        // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //   // Get extension
        $extension = $request->file('img_url')->getClientOriginalExtension();

        //   // Create new filename
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        //   // Uplaod image
        $path = $request->file('img_url')->storeAs('public/img', $filenameToStore);

        $updcourse->img_url = $filenameToStore;

        $updcourse->save();
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deldetail = course::find($id);

        $deldetail->delete();
        return redirect()->route('course.index');
    }

// for view detail
    // public function detail()
    // {

    //     return view('newsportal.detail');

    // }

    // for view detail value entry
    public function detailvalue()
    {

        //  return view('Admin.detailvalue');

    }
}
