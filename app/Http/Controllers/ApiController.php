<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursedetail;

class ApiController extends Controller
{
  public function CourseDetails($id)
  {
$detail=Coursedetail::find($id);
return response()->json($detail);


  }




}
