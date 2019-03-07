@extends('admin.adminmaster')

<div>
        @include('admin.adminnav')
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
  <center><h1>Course <i style="color:blue">update</i> form </h1> </center>
  <div class="container">
        <a class="btn btn-info" href="http://127.0.0.1:8000/course/"> <i class="fas fa-directions fa-5"></i> Go Back</a>

</div>
  <div class="container">
    <div class="row">
        <div class="col-md-8">

            <form action="{{ route('course.update',$updcourse->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                    @method('PUT')
                     <div class="form-group">
                      <label for="Category">Category</label>
                      <input type="Category" class="form-control" id="Category" name="Category" placeholder="Enter Course Category" value="{{ $updcourse->Category}}" required>

                      <div class="form-group">
                            <label for="Cat_title">Cat_title</label>
                            <textarea class="form-control" rows="5" id="Cat_title" name="Cat_title" placeholder="Enter Course Cat_title"  required> {{ $updcourse->Cat_title}}</textarea>
                          </div>


                              <div class="form-group">
                                    <label for="img_Url">Upload Course Image</label>
                                    <input  value="{{$updcourse->img_url }}" type="file" class="form-control-file" name="img_url" id="img_url" required>
                                  </div>

                           {{-- {{Form::select('course_id',$crs, null, [ 'placeholder' => 'select courses','class'=>'form-control', 'method'=>'get' ])}} --}}

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                  </form>
        </div>
    </div>



    </div>



</div>
<br>
<br>

@include('newsportal.footer')
