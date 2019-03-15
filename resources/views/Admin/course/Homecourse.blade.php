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
                                             <td> <img   style="width:50%" class="card-img-top" src="storage/img/{{$course->img_url}}" alt="Card image cap"> </td>
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

