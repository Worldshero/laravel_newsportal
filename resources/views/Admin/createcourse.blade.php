@extends('newsportal.master')

<div>
<div>
        @include('newsportal.nav')
  </div>
  <br>
  <br>
  <br>

  
  <center> <h1>Course detail <i>Create</i> For Landing page </h1>  </center>
  <div class="container">
      <a class="btn btn-info" href="http://127.0.0.1:8000/course/"> <i class="fas fa-directions fa-5"></i> Go Back</a>

</div>
<div class="container">
<div class="row">
    <div class="col-md-8">

        <form action=" {{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                 <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="Category" class="form-control" id="Category" name="Category" placeholder="Enter Course Category" required>
                  
                  <div class="form-group">
                        <label for="Cat_title">Cat_title</label>
                        <textarea class="form-control" rows="5" id="Cat_title" name="Cat_title" placeholder="Enter Course Cat_title" required></textarea>
                      </div> 
                        
                        <div class="form-group">
                          <label for="img_Url">Upload Course Image</label>
                          <input type="file" class="form-control-file" name="img_url" id="img_url" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               
              </form>
    </div>
</div>


</div>



</div>
<br>
<br>

@include('newsportal.footer')