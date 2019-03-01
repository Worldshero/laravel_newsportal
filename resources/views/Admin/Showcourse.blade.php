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
             <a class="btn btn-info" href="http://127.0.0.1:8000/course"> <i class="fas fa-directions fa-5"></i> Go Back</a>

</div>
    
<div class="container">
        <div class="row">

             <div class="col-xs-12 col-sm-12 col-md-12">
       <h3>  {{$showdetail->Category}} </h3>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
         {{$showdetail->Cat_title}}
             </div>
             <div class="card" style="width: 18rem;">
             {{-- <img class="card-img-top" src="storage/img/{{$showdetail->img_url}}" alt="Card image cap"> --}}
             <img class="card-img-top" src="/storage/img/{{$showdetail->img_url}}" alt="Card image cap">
             </div>
            </div>
</div>



</div>

@include('newsportal.footer')