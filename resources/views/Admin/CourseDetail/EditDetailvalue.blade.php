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

                                <div id="content-header">
                                    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                                </div>


                                         <div class="col-md-8 offset-md-2">
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

