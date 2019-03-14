@extends('Admin.layout.master')
@section('content')
                      <!--breadcrumbs-->
                 <div id="content-header">
                  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                 </div>
                        <!--End-breadcrumbs-->
                             <div class="container-fluid">
                              <canvas id="bar-chart" width="600" height="100"></canvas>
                             </div>
@endsection
@section('javascript')
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
             <script src="{{asset('js/jquery.min.js')}}"></script>
             <script src="{{asset('js/matrix.js')}}"></script>
             <script type="text/javascript">
                      var courses = {!! json_encode($catDetails) !!};
                      var total = {!! json_encode($TotleDetails) !!};
                 function goPage (newURL) {
                             // if url is empty, skip the menu dividers and reset the menu selection to default
                         if (newURL != "") {
                             // if url is "-", it is this page -- reset the menu:
                         if (newURL == "-" ) {
                         resetMenu();
                         }
                         // else, send page to designated URL
                        else
                         {
                         document.location.href = newURL;
                             }
                          }
                         }
                         // resets the menu selection upon entry to this page:
                  function resetMenu() { document.gomenu.selector.selectedIndex = 2; }
                          // STRAT bar graph
                         new Chart(document.getElementById("bar-chart"), {
                         type: 'bar',
                         data: {
                            //Course Category
                         labels: courses,
                         datasets: [{
                         label: "Details Added",
                         backgroundColor: ["#3e95cd", "#8e5ea2","#3e95cd"],
                          // Course details Count
                         data: total
                                 }
                             ]
                         },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Category Course Added '
      }
    }
});
    </script>
@endsection
