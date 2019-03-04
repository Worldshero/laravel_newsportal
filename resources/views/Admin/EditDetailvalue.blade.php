@extends('newsportal.master')                   
 @include('newsportal.nav')                          
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
                                <div class="container" class="margin-top:70px">
                            <h1>Course Details <i style="color:blue">update</i> form </h1>
                                 <div class="container" style="margin-top:60px">
                                     <a class="btn btn-info" href="http://127.0.0.1:8000/course/detailvalue"> <i class="fas fa-directions fa-5"></i> Go Back</a>
                                 </div>
                           
                                     <div class="row">
                                         <div class="col-md-8">
                                         <form action="{{ route('detailvalue.update',$editdetail->id) }}" method="POST" enctype="multipart/form-data">                 
                                              @csrf
                                              @method('PUT')
                                        <div class="form-group">
                                         <label for="Sub_cat">Sub category</label>
                                            <input type="Sub_cat" class="form-control" id="Sub_cat" name="Sub_cat" placeholder="Enter Course Sub_cat" value="{{ $editdetail->Sub_cat }}" required>                    
                                         <div class="form-group">
                                         <label for="Sub_title">Sub title</label>
                                           <textarea class="form-control" rows="5" id="Sub_title" name="Sub_title" placeholder="Enter Course Sub title"  required> {{ $editdetail->Sub_title }}</textarea>
                                        </div> 
                                      <div class="form-group">
                                      <label for="sel1">Select Course</label>                        
                                      {{Form::select('course_id',$crs, null, [ 'placeholder' => 'select courses','class'=>'form-control', 'method'=>'get' ])}}
                                     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                     </form>                                 
                                 </div>
                        </div>
@include('newsportal.footer')