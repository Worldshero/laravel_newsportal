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
  <center><h1>Course Details <i style="color:blue">update</i> form </h1> </center>
  <div class="container">
        <a class="btn btn-info" href="http://127.0.0.1:8000/course/detailvalue"> <i class="fas fa-directions fa-5"></i> Go Back</a>

</div>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
    
            <form action="{{ route('detailvalue.update',$editdetail->id) }}" method="POST" enctype="multipart/form-data">
                  
                @csrf
                    @method('PUT')
                     <div class="form-group">
                      <label for="Sub_cat">Sub_cat</label>
                      <input type="Sub_cat" class="form-control" id="Sub_cat" name="Sub_cat" placeholder="Enter Course Sub_cat" value="{{ $editdetail->Sub_cat }}" required>
                      
                      <div class="form-group">
                            <label for="Sub_title">Sub_title</label>
                            <textarea class="form-control" rows="5" id="Sub_title" name="Sub_title" placeholder="Enter Course Sub_title"  required> {{ $editdetail->Sub_title }}</textarea>
                          </div> 
                            
                          <div class="form-group">
                              <label for="sel1">Select Course</label>
                          
                           {{Form::select('course_id',$crs, null, [ 'placeholder' => 'select courses','class'=>'form-control', 'method'=>'get' ])}}

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                   
                  </form>
        </div>
    </div>
    

    
    </div>



</div>
<br>
<br>

@include('newsportal.footer')