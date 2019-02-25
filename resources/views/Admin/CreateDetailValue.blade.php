@extends('newsportal.master')

<div>
<div>
        @include('newsportal.nav')
  </div>
  <br>
  <br>
  <br>
  <br>
  
  <center><h1>Course Details Submit form </h1> </center>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
    
            <form action=" {{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                     <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="title" class="form-control" id="title" name="title" placeholder="Enter Course Title" required>
                      
                      <div class="form-group">
                            <label for="Body">Body</label>
                            <textarea class="form-control" rows="5" id="body" name="body" placeholder="Enter Course Body" required></textarea>
                          </div> 
                            
                          <div class="form-group">
                              <label for="sel1">Select list:</label>
                              <select class="form-control" id="sel1">
                                <option>Select</option>
                                <option>Php</option>
                                <option>Css</option>
                                <option>javascript</option>
                                <option>java</option>
                              </select>
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