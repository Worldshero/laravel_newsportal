@extends('newsportal.master')


<div>
        @include('newsportal.nav')
  </div>

<br>
<br>
<br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Todo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href=""> <i class="fas fa-directions fa-5"></i> Go Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>course Details:</strong>
               <h1 ><p class="text-primary"> {{ $course->title }} </p></h1>
               
            </div>
            <div> <h4 ><p class="text-primary"> {{ $course->body }} </p></h4></div>
        </div>
    </div>




@include('newsportal.footer')