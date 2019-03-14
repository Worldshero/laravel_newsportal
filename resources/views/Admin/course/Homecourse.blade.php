@extends('Admin.layout.master')
@section('content')
                    <div id="content-header">
                       <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                        </div>
                            <table class="table table-striped responsive">
                                 <thead >
                                        <tr><th scope="col" style="width: 3%"><h5> S.No. </h5></th>
                                        <th scope="col" style="width: 10%"><h5>Course</h5></th>
                                        <th scope="col"  style="width:25%"><h5> Body </h5></th>
                                        <th scope="col"  style="width: 8%"><h5>Image</h5></th>
                                        <th scope="col"  style="width: 15%"><h5>Created</h5></th>
                                        <th scope="col"  style="width: 15%"><h5>Updated</h5></th>
                                        <th scope="col"  style="width: 27%"><h5> Actions </h5></th>
                                        </tr>
                                 </thead>
                                    <tbody>
                                         @foreach ($courses as $course)
                                         <tr>
                                             <td>  <b>{{$loop->index+1}} </b> </td>
                                             <td>   {{$course->Category}}</td>
                                             <td class="text"> {{$course->Cat_title}}  </td>
                                             <td> <img class="card-img-top" src="storage/img/{{$course->img_url}}" alt="Card image cap"> </td>
                                             <td> {{$course->created_at}}  </td>
                                             <td> {{$course->updated_at}}  </td>
                                             <td>
                                             <div class="row">
                                                     <div class="col-md-3 offset-md-2">
                                                     <a class="btn btn-success" href="{{ route('course.show',$course->id) }}"><i class="fas fa-eye"></i></a>
                                                     </div>
                                                     <div class="col-md-3">
                                                     <a onclick="return confirm(' Are you sure edit this ? ')" class="btn btn-primary" href="{{ route('course.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                                                     </div>
                                                     <div class="col-md-1">
                                                     <form action="{{ route('course.destroy', $course->id)}}" method="post">
                                                     @csrf
                                                     @method('DELETE')
                                                     <button  onclick="return confirm('Are you sure Delete ? ')" class="btn btn-danger" href="{{ route('course.destroy',$course->id) }}" type="submit"><i class="fa fa-trash"></i></button>
                                                     </form>
                                                     </div>
                                             </div>
                                             </td></tr>
                                             @endforeach
                                         </tbody>
                                   </table>
                                   <div class=" col-md-5 offset-5">   <?php echo $courses->render(); ?></div>
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
