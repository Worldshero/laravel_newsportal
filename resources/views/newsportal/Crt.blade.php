@extends('newsportal.master')

<div>
<div>
        @include('newsportal.nav')
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="container">
<div class="row">
    <div class="col-md-8">

        <form action=" {{ route('course.create') }}" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="title" class="form-control" id="title" name="title" placeholder="Enter Course Title">
                  
                  <div class="form-group">
                        <label for="Body">Body</label>
                        <textarea class="form-control" rows="5" id="body" name="body" placeholder="Enter Course Body"></textarea>
                      </div>
                <form>
                        {{-- <div class="form-group">
                          <label for="exampleFormControlFile1">Upload Course Image</label>
                          <input type="file" class="form-control-file" name="img_url" id="exampleFormControlFile1">
                        </div> --}}
                      </form>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
    </div>
</div>


</div>



</div>
<br>
<br>

@include('newsportal.footer')