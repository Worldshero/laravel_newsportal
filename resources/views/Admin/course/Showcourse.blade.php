@extends('Admin.layout.master')
@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
</div>

{{-- <div class="container">
             <a class="btn btn-info" href="http://127.0.0.1:8000/course"> <i class="fas fa-directions fa-5"></i> Go Back</a>

</div> --}}




             <div class=" col-md-6 offset-md-2">
       <h3>  {{$showdetail->Category}} </h3>
             </div>
             <div class=" col-md-6 offset-md-2 ">
         {{$showdetail->Cat_title}}
             </div>
             <div class="card offset-md-2" style="width: 18rem;">
             {{-- <img class="card-img-top" src="storage/img/{{$showdetail->img_url}}" alt="Card image cap"> --}}
             <img class="card-img-top" src="/storage/img/{{$showdetail->img_url}}" alt="Card image cap">
             </div>



@endsection
@section('javascript')
{{-- <script src="{{ asset('/js/custom.js') }}"></script> --}}
  {{-- <script src="{{ asset('/js/login.js') }}"></script> --}}
  <script src="{{asset('js/excanvas.min.js')}}"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.flot.min.js')}}"></script>
  <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
  <script src="{{asset('js/jquery.peity.min.js')}}"></script>
  <script src="{{asset('js/fullcalendar.min.js')}}"></script>
  <script src="{{asset('js/matrix.js')}}"></script>
  <script src="{{asset('js/matrix.dashboard.js')}}"></script>
  <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
  <script src="{{asset('js/matrix.interface.js')}}"></script>
  <script src="{{asset('js/matrix.chat.js')}}"></script>
  <script src="{{asset('js/jquery.validate.js')}}"></script>
  <script src="{{asset('js/jquery.wizard.js')}}"></script>
  <script src="{{asset('js/jquery.uniform.js')}}"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
  <script src="{{asset('js/matrix.popover.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/matrix.tables.js')}}"></script>
  <script src="{{asset('js/matrix.form_validation.js')}}"></script>
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




