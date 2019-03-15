
@extends('Admin.layout.master')
@section('content')
                                <div id="content-header">
                                    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                                </div>
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
                     <div class="col-md-8 offset-md-2 ">
                         <form action="{{ route('course.update',$updcourse->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                                  @method('PUT')
                     <div class="form-group">
                                 <label for="Category">Category</label>
                             <input type="Category" class="form-control" id="Category" name="Category" placeholder="Enter Course Category" value="{{ $updcourse->Category}}" required>
                     </div>
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
@endsection

@section('javascript')
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/matrix.js')}}"></script>
  <script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
@endsection
