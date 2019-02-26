@extends('newsportal.master')
<div>

<div>
        @include('newsportal.nav')
  </div>
<br>
<br>
<br>
<br>


    
<div class="container">
        <div class="row">

             <div class="col-xs-12 col-sm-12 col-md-12">
       <h3>  {{$showdetail->title}} </h3>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
         {{$showdetail->body}}
             </div>

        </div>
</div>



<p class="text-right">  <a class="btn btn-info" href="http://127.0.0.1:8000/course/detailvalue"> <i class="fas fa-directions fa-5"></i> Go Back</a></p>
</div>

@include('newsportal.footer')