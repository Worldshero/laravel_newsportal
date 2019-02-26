@extends('newsportal.master')


<div>
        @include('newsportal.nav')
  </div>

<br>
<br>
<br>

<center>Course detailvalue index </center>
<div class="container">
<table class="container-fluid">

        <thead>

                <tr><th scope="col"><h4> S.No. </h4></th>
                <th scope="col"><h4> Title </h4></th>
                <th scope="col"><h4> Body </h4></th>
                <th scope="col"><h4>Created at</h3></th>
                <th scope="col"><h4>Updated at </h4></th>
                <th scope="col"><h4> Actions <a   onclick="return confirm('You want to create new Post ? ')" href="http://127.0.0.1:8000/course/detailvalue/create" class="btn btn-info" float="right">
                                          <i class="fas fa-plus"></i> create</a></h4></th>
                      </tr>
                    </thead>
                  <tbody>
                <tr><td>  1   </td>
                <td>    java  </td>
                <td>   hello java   </td>
                <td>    ddd  </td>
                <td>    ddd  </td>
                <td> <div class="row">
    
           <a class="" >   <i class="fa fa-trash btn btn-danger"></i></a>
           <a> <a onclick="return confirm(' Are you sure edit this ? ')" class="btn btn-primary" href="#"><i class="fas fa-edit"></i></a>  </a>
            <a class="btn btn-success" href="#"><i class="fas fa-eye"></i></a>



             </td>
           </tr>
          </tbody>
      </table>

</div>




  @include('newsportal.footer')