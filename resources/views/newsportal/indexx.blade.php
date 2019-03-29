@extends('newsportal.master')
     <div class="container" style="margin-top:50px">
         <div>
              @include('newsportal.nav')
                         </div>
                                <div id="demo" class="carousel slide" data-ride="carousel"  >
                                    <ul class="carousel-indicators">
                                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                                      <li data-target="#demo" data-slide-to="1"></li>
                                      <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="storage/img/002.jpg" alt="Los Angeles" width="1100" height="500">
                                        <div class="carousel-caption">
                                          <h3>Coder Kidies</h3>
                                          <p>We had such a great time in LA!</p>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <img src="storage/img/001.jpg" alt="Chicago" width="1100" height="500">
                                        <div class="carousel-caption">
                                          <h3>Java</h3>
                                          <p>Thank you, Coder!</p>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <img src="storage/img/003.jpg" alt="New York" width="1100" height="500">
                                        <div class="carousel-caption">
                                          <h3>Programmer place</h3>
                                          <p>Learn programmin !</p>
                                        </div>
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                      <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                      <span class="carousel-control-next-icon"></span>
                                    </a>
                                  </div>
                                  <br>
                                    <div class="row">
                                       <div class="col-md-2">
                                            <div class="table-responsive d-none d-xl-block">
                                                    <table class="table  ">
                                                     <tr>   <th>HTML5 Tutorial</th> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr>   <th>HTML5 Tutorial</th> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr>   <th>HTML5 Tutorial</th> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                     <tr><td>HTML Introduction</td> </tr>
                                                </table>





                                            </div>
                                    </div>
                                       <div class="col-md-9">
                                           <div class="row">
                                        @foreach ($courses as $course)
                                      <div class='col-md-4 col-sm-6'>
                                        <div class="card" style="width: 15rem;">
                                        <img style=""  class="card-img-top thumbnail rounded-circle" src="storage/img/{{$course->img_url}}" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">{{$course->Category}}</h5>
                                            <p class="card-text">{{$course->Cat_title}}</p>
                                            <a href="{{ route('frontend.show',$course->id) }}"   class="btn btn-primary">See More..</a>
                                          </div>
                                        </div>
                                    </div>
                                        @endforeach
                                           </div>
                                    </div>
                                          </div>
                                           </div>
                                           <div class=" col-md-5 offset-5">   <?php echo $courses->render(); ?></div>

          @include('newsportal.footer')























