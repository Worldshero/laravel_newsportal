@extends('newsportal.master')

<div>
<div>
        @include('newsportal.nav')
  </div>
  <br>
  <br>
  <br>
  
  @if ($errors->any())
  <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <center><h1>Course Details <i style="color:blue">Submit</i> form </h1> </center>
  <div class="container">
        <a class="btn btn-info" href="http://127.0.0.1:8000/course/detailvalue"> <i class="fas fa-directions fa-5"></i> Go Back</a>

</div>




  <div class="container">
    <div class="row">
        <div class="col-md-8">
    
            <form action=" {{ route('detailvalue.store') }}" method="POST" enctype="multipart/form-data" onsubmit="createTextSnippet();" >
                    {{ csrf_field() }}
                     <div class="form-group">
                      <label for="Sub_cat">Sub_cat</label>
                      <input type="Sub_cat" class="form-control" id="Sub_cat" name="Sub_cat" placeholder="Enter Course Sub_cat" required>
                      
                      <div class="form-group">
                            <label for="Sub_title">Sub_title</label>
                            <textarea  id="summary-ckeditor "  name="Sub_title"  class="form-control" placeholder="Enter Course Sub_title" required></textarea>
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