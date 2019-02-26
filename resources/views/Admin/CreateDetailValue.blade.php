@extends('newsportal.master')

<div>
<div>
        @include('newsportal.nav')
  </div>
  <br>
  <br>
  <br>
  <br>
  
  <center><h1>Course Details <i style="color:blue">Submit</i> form </h1> </center>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
    
            <form action=" {{ route('detailvalue.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                     <div class="form-group">
                      <label for="title">Title</label>
                      <input type="title" class="form-control" id="title" name="title" placeholder="Enter Course Title" required>
                      
                      <div class="form-group">
                            <label for="Body">Body</label>
                            <textarea class="form-control" rows="5" id="body" name="body" placeholder="Enter Course Body" required></textarea>
                          </div> 
                            
                          <div class="form-group">
                              <label for="sel1">Select Course</label>
                          
                           {{Form::select('course_id',$courses, null, [ 'placeholder' => 'select courses','class'=>'form-control', 'method'=>'get'])}}

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                   
                  </form>
        </div>
    </div>
    

    
    </div>



</div>
<br>
<br>

@include('newsportal.footer')