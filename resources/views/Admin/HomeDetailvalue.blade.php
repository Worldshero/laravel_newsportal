@extends('newsportal.master')


<div>
        @include('newsportal.nav')
  </div>

<br>
<br>
<br>
<p class="text-right"><a   onclick="return confirm('You want to create new Post ? ')" href="http://127.0.0.1:8000/course/detailvalue/create" class="btn btn-info" float="right">
  <i class="fas fa-plus"></i> create</a> </p>

<div class="container">
<table class="table table-bordered">

        <thead >

                <tr><th scope="col" style="width: 5%"><h5> S.No. </h5></th>
                <th scope="col" style="width: 15%"><h5> Title </h5></th>
                <th scope="col"  style="width: 25%"><h5> Body </h5></th>
                <th scope="col"  style="width: 7%"><h5>crs_id</h5></th>
                <th scope="col"  style="width: 16%"><h5>Created</h3></th>
                <th scope="col"  style="width: 16%"><h5>Updated</h5></th>
                <th scope="col"  style="width: 14%"><h5> Actions </h5></th>
                      </tr>
                    </thead>
                  <tbody>
                      @foreach ($courses as $course) 
                <tr><td>  {{$loop->index+1}}  </td>
                <td>   {{$course->title}}</td>
                <td class="text"> {{$course->body}}  </td>
                <td> {{$course->course_id}} </td>
                <td> {{$course->created_at}}  </td>
                <td> {{$course->updated_at}}  </td>
                <td> <div class="row">
                  
           <a class="" >   <i class="fa fa-trash btn btn-danger"></i></a>
           <a> <a onclick="return confirm(' Are you sure edit this ? ')" class="btn btn-primary" href="#"><i class="fas fa-edit"></i></a>  </a>
            <a class="btn btn-success" href="{{ route('detailvalue.show',$course->id) }}"><i class="fas fa-eye"></i></a>



             </td>
           </tr>
           @endforeach
          </tbody>
      </table>

</div>




  @include('newsportal.footer')