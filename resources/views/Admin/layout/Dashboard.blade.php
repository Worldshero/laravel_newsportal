@extends('Admin.layout.master')
@section('content')
                      <!--breadcrumbs-->

                        <!--End-breadcrumbs-->
                        <div class="container">
                        <div class="row">
                             <div class="col-md-6 ">
                              <canvas id="bar-chart" width="100" height="75"></canvas>
                            </div>
                              <div  class="col-md-6">
                                 <h3 id="tdiv"> Current Time <br> {{ date('Y-m-d H:i:s') }} </h3>

                              </div>
                             </div></div>
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
                         label: "Total",
                         // backgroundColor: ['#7042EE'],
                          backgroundColor:'#7042EE',

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
      },
      scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }

});


// for auto refresh  div
var counter = 5;

// The countdown method.
window.setInterval(function () {
    counter--;
    if (counter >= 0) {
        var span;
        span = document.getElementById("tdiv");
        span.innerHTML = counter;
    }
    if (counter === 0) {
        clearInterval(counter);
    }

}, 1000);

window.setInterval('refresh()', 10000);

// Refresh or reload page.
function refresh() {
    window  .location.reload();
}


    </script>


@endsection
