@extends('Admin.layout.master')
@section('content')

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
                    <div class="container">
                            <div class="row">
                              <div class="col-md-8 offset-md-1">
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
    @endsection
    @section('javascript')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
  <script type="text/javascript">

    function goPage (newURL) {


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


