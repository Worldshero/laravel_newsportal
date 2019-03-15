@extends('Admin.layout.master')

@section('content')

                <table class="table table-bordered">
                  <thead >
                    <tr><th scope="col" style="width: 5%"><h5> S.No. </h5></th>
                    <th scope="col" style="width: 15%"><h5> Sub Categories </h5></th>
                    <th scope="col"  style="width: 25%"><h5> Body </h5></th>
                    <th scope="col"  style="width: 8%"><h5>Course</h5></th>
                    <th scope="col"  style="width: 15%"><h5>Created</h5></th>
                    <th scope="col"  style="width: 15%"><h5>Updated</h5></th>
                    <th scope="col"  style="width: 27%"><h5> Actions </h5></th>  </tr>
                    </thead>
                         <tbody>
                              @foreach ($courses as $course)
                                 <tr><td> <b> {{$loop->index+1}} </b> </td>
                                 <td>   {{$course->Sub_cat}}</td>
                                 <td class="textt"> {{$course->Sub_title}}  </td>
                                 {{-- <td> {{$course->course_id}} </td> --}}
                             <td>{{ $crsval[$course->course_id]}}</td>
                                 <td> {{$course->created_at}}  </td>
                                 <td> {{$course->updated_at}}  </td>
                                 <td>  <div class="row">
                                 <div class="col-md-3 offset-md-1">
                                     <a class="btn btn-success" href="{{ route('detailvalue.show',$course->id) }}"><i class="fas fa-eye"></i></a></div>
                                 <div class="col-md-3">
                                     <a onclick="return confirm(' Are you sure edit this ? ')" class="btn btn-primary" href="{{ route('detailvalue.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                                 </div>
                                 <div class="col-md-1">
                                     <form action="{{ route('detailvalue.destroy', $course->id)}}" method="post">
                                         @csrf
                                          @method('DELETE')
                                          <button  onclick="return confirm('Are you sure Delete ? ')" class="btn btn-danger" href="{{ route('detailvalue.destroy',$course->id) }}" type="submit"><i class="fa fa-trash"></i></button>
                                     </form>
                                 </div>
                                 </div></td>
                               </tr>
                          @endforeach
                   </tbody>
             </table>
         <div class=" col-md-5 offset-5">   <?php echo $courses->render(); ?></div>

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



