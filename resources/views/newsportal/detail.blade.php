@extends('newsportal.master')
        <div>
            @include('newsportal.nav')
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container">
              <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                  @foreach ($courseDetails as $item)
                                  <li class="list-group-item"> <a  href="{{'/frontend/det/'.$item->id}}">{{$item->Sub_cat}}</a></li>      
                                  @endforeach                
                                </ul>
                              </div>
                        </div>
                        <div class="col-md-8 col-sm-7 col-lg-8">
                            <div class="card text-center">
                                 <div class="card-header"> Java Learning</div>
                                 <div class="card-body">
                                <h5 class="card-title">Dynamic sub category</h5>
                
                  {{-- <p class="card-text"> With supporting text below as a 
                      natural lead-in to additional content With supporting t
                      ext below as a natural lead-in to additional content.With
                       supporting text below as a natural lead-in to additional content 
                        With supporting text below as a natural lead-in to additional content
                        With supporting text below as a natural lead-in to additional content
                         With supporting text below as a natural lead-in to additional content.
                         With supportingWith supporting text below as a natural lead-in to additional content
                         With supporting text below as a natural lead-in to additional content
                          With supporting text below as a natural lead-in to additional content.
                          With supporting text below as a natural lead-in to additional content With supporting text
                           below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content
                           With supporting text below as a natural lead-in to additional content
                            With supporting text below as a natural lead-in to additional content.
                            With supporting text below as a natural lead-in to additional content With supporting text
                             below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content
                             With supporting text below as a natural lead-in to additional content
                              With supporting text below as a natural lead-in to additional content.
                              With supporting text below as a natural lead-in to additional content With supporting text
                               below as a natural lead-in to additional content. text below as a natural lead-in to additional content With supporting text
                          below as a natural lead-in to additional content.
                        .</p> --}} </div>
                            <div class="card-footer text-muted">
                              2 days ago
                            </div></div>
                          <div class="inline ">
                            <a class=" btn btn-primary scs"> Back<i class="fas fa-arrow-left"></i></a>
                            <a class="btn btn-primary scs" style="float:right" > Next<i class="fas fa-arrow-right"></i> </a>
                    </div></div>
                        </div>
                        </div>
                <br><br>
@include('newsportal.footer')

