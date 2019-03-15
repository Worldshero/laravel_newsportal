@extends('Admin.layout.master')
@section('content')
               <div id="content-header">
                <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
             </div>
                 <div class="jumbotron">
                         <div class=""><h3>{{$showdetail->Sub_cat}} </h3></div>
                        <div class=" "><p>{{$showdetail->Sub_title}}</p></div>
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
