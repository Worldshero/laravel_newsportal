@extends('admin.adminmaster')
<div>@include('Admin.adminnav')</div>
<br><br><br>



                     <div class="container">
                         <div class="row">
                            <div class="col-md-7" >@include('Admin.sidebar')</div>
                            <div class="col-md-1">
                             <table class="table table-bordered">
                                 <thead >
                                        <tr><th scope="col" style="width: 5%"><h5> S.No. </h5></th>
                                        <th scope="col" style="width: 15%"><h5>Course catgr </h5></th>
                                        <th scope="col"  style="width: 25%"><h5> Body </h5></th>
                                        <th scope="col"  style="width: 7%"><h5>Image</h5></th>
                                        <th scope="col"  style="width: 16%"><h5>Created</h5></th>
                                        <th scope="col"  style="width: 16%"><h5>Updated</h5></th>
                                        <th scope="col"  style="width: 14%"><h5> Actions </h5></th>
                                        </tr>
                                 </thead>
                                    <tbody>
                                         @foreach ($courses as $course)
                                         <tr>
                                             <td>  {{$loop->index+1}}  </td>
                                             <td>   {{$course->Category}}</td>
                                             <td class="text"> {{$course->Cat_title}}  </td>
                                             <td> <img class="card-img-top" src="storage/img/{{$course->img_url}}" alt="Card image cap"> </td>
                                             <td> {{$course->created_at}}  </td>
                                             <td> {{$course->updated_at}}  </td>
                                             <td>
                                             <div class="row">
                                                     <div class="col-md-4">
                                                     <a class="btn btn-success" href="{{ route('course.show',$course->id) }}"><i class="fas fa-eye"></i></a>
                                                     </div>
                                                     <div class="col-md-4">
                                                     <a onclick="return confirm(' Are you sure edit this ? ')" class="btn btn-primary" href="{{ route('course.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                                                     </div>
                                                     <div class="col-md-3">
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
                              </div>
                         </div>
                     </div>
@include('newsportal.footer')



{{-- navvvvvvv------------------------------------------------------------- --}}


<nav class="navbar navbar-expand navbar-light fixed-top" style="background-color:#2E363F;">
        <p>My Brand</p>
          <ul class=" nav navbar-nav">
              <li class="dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      Welcome,<P> {{ Auth::user()->Name }}</P>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul>
      </nav>
