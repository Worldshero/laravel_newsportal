<?php

namespace App\Http\Controllers;
use Validator;
//use Illuminate\Support\Facades\Request;
 //use Request;
 use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Coursedetail;
use App\course;


class ApiController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

  public function CourseDetails($id)
  {
    $detail=Coursedetail::find($id);
    return response()->json($detail);
  }

//for course category
//show course details
  public function ShowCourse($id)
  {
    $course=Course::find($id);
    return response()->json($course);
  }

//create course details
public function CreateCourse(){

  $authKey = $this->request->header('Authorization');
  if($authKey === config('api-key.appKey')){
    $data=[
        "status"=>"ok"];
        $err=["status"=>"error detected"];

    $validation = Validator :: make(\Request::all(),[
        'Category' => 'required|unique:courses',
        'Cat_title' => 'required',
        'img_url' => 'required',
        'img_url' => 'image|max:1999',
  ]);

  if($validation->fails()){
      $errors = $validation->errors();
      return $errors->toJson();
  }else{

    //save data for title and body
    $course = new course;
    $course->Category = $this->request->Category;
    $course->Cat_title = $this->request->Cat_title;

    // Get filename with extension
    $filenameWithExt = $this->request->file('img_url')->getClientOriginalName();

    //   // Get just the filename
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    //   // Get extension
    $extension = $this->request->file('img_url')->getClientOriginalExtension();

    //   // Create new filename
    $filenameToStore = $filename . '_' . time() . '.' . $extension;

    //   // Uplaod image
    $path = $this->request->file('img_url')->storeAs('public/img', $filenameToStore);

    $course->img_url = $filenameToStore;

    if ($course->save()) {
        return response($data,201);
    }
    else {
        return response($err,500);
    }
  }
}else{
    return response(array("message" => "Invalid Access"),401);
}


}


}
