@extends('Admin.layout.master')
@section('content')



<div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="http://127.0.0.1:8000/course"> <i class="icon-ok"></i> <span class="label label-important">{{$courseCount}}</span>Total Courses</a> </li>
                <li class="bg_ly"> <a href="http://127.0.0.1:8000/course/detailvalue"> <i class="icon-th-large"></i><span class="label label-success">{{$DetailCount}}</span> Total Course Details </a> </li>
                <li class="bg_lo span3"> <a href="#"> <i class="icon-star-empty"><span class="label label-important"></span></i>Top Rated Courses</a> </li>

                <li class="bg_ls"> <a href="#"> <i class="icon-user"></i> <span class="label label-success">{{ $userCount}}</span>Total Registered User</a> </li>

            </ul>
        </div>
    </div>

                        <div class="container">
                        <div class="row">
                             <div class="col-md-6 ">
                              <canvas id="bar-chart" width="100" height="75"></canvas>
                            </div>
                              <div  class="col-md-6">
                                 <h3 id=""> Current Time <br> {{ date('Y-m-d H:i:s') }} </h3>

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
// var counter = 5;

// // The countdown method.
// window.setInterval(function () {
//     counter--;
//     if (counter >= 0) {
//         var span;
//         span = document.getElementById("tdiv");
//         span.innerHTML = counter;
//     }
//     if (counter === 0) {
//         clearInterval(counter);
//     }

// }, 1000);

//window.setInterval('refresh()', 10000);

// Refresh or reload page.
// function refresh() {
//     window  .location.reload();
// }





    </script>


@endsection
