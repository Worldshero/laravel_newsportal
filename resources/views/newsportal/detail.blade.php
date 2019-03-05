@extends('newsportal.master')
        <div>
            @include('newsportal.nav')
        </div>
            <div class="container" style="margin-top:80px">
              <div class="row">
                          <div class="col-md-4 col-lg-4 col-sm-4">
                            <div class="card" style="width: 18rem;" id="coursedetail">
                                <ul class="list-group list-group-flush">
                                    <?php $i=0;
                                     $xyz = array();
                                    ?>
                                  @foreach ($courseDetails as $item)
                                 @php
                                if ($i==0 )
                                {
                                    $xyz=$item;
                                }
                                 @endphp
                                <li class="list-group-item"  > <a  data-id="{{$item->id}}"   class="CourseDetails">{{$item->Sub_cat}}</a></li>
                                <input type="hidden" id="detailsid" value="{{$item->id}}" />
                               @php
                               $i++;
                               @endphp                                  @endforeach
                                </ul>
                              </div>
                        </div>
                        <div class="col-md-8 col-sm-7 col-lg-8" >

                            <div id="result" >
                                    <div class="card text-center"><div class="card-header">{{$xyz->Sub_cat}}</div>      <div class="card-body">
                                            <h5 class="card-title">{{$xyz->Sub_title}}</h5>

                                       </div>
                                        <div class="card-footer text-muted">
                                                {{$xyz->updated_at}}
                                        </div></div>
                            </div>

                          <div class="inline ">
                            <a class=" btn btn-primary scs" > Back<i class="fas fa-arrow-left"></i></a>
                            <a class="btn btn-primary scs" style="float:right" > Next<i class="fas fa-arrow-right"></i> </a>
                    </div></div>
                        </div>
                        </div>
                <br><br>
@include('newsportal.footer')

