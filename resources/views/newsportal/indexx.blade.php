@extends('newsportal.master')
<div>
<div>
      @include('newsportal.nav')
</div>
<br>
<br>
<br>
<!-- Container for the image gallery -->
<script src="{{ asset('vendor/assets/js/custome.js') }}"></script>
<link href="{{ asset('vendor/assets/css/custome.css') }}" rel="stylesheet">


<br>


<div class="container">
   <div class="row">
      @foreach ($courses as $course)  
    <div class='col-md-4 col-sm-6'>
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="storage/img/{{$course->img_url}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$course->Category}}</h5>
          <p class="card-text">{{$course->Cat_title}}</p>
          <a href="{{ route('frontend.show',$course->id) }}"   class="btn btn-primary">See More..</a>
        </div>
      </div>
  </div>
  @endforeach
       
        </div> 
  </div>
</div>

    
   <br/>

   <br/>
   <br/>
   

               
@include('newsportal.footer')






   

                
   
    


        
                



    




