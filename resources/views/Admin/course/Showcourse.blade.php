@extends('Admin.layout.master')
@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
</div>





             <div class=" col-md-6 offset-md-2">
       <h3>  {{$showdetail->Category}} </h3>
             </div>
             <div class=" col-md-6 offset-md-2 ">
         {{$showdetail->Cat_title}}
             </div>
             <div class="card offset-md-2" style="width: 18rem;">

             <img class="card-img-top" src="/storage/img/{{$showdetail->img_url}}" alt="Card image cap">
             </div>



@endsection
@section('javascript')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
  <script type="text/javascript">

    function goPage (newURL) {


        if (newURL != "") {


            if (newURL == "-" ) {
                resetMenu();
            }

            else {
                document.location.href = newURL;
            }
        }
    }


    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
@endsection




