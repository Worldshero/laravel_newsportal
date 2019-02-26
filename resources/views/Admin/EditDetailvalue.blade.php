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
    <div class="row">
        <div class="col-md-8">
    
            <form action="{{ route('detailvalue.update',$editdetail->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="form-group">
                      <label for="title">Title</label>
                      <input type="title" class="form-control" id="title" name="title" placeholder="Enter Course Title" value="{{ $editdetail->title }}" required>
                      
                      <div class="form-group">
                            <label for="Body">Body</label>
                            <textarea class="form-control" rows="5" id="body" name="body" placeholder="Enter Course Body"  required> {{ $editdetail->body }}"</textarea>
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