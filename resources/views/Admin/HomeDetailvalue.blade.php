@extends('newsportal.master')

<div>
<div>
        @include('newsportal.nav')
  </div>

<br>
<br>
<br>

<center> index detailvalue </center>

<table class="table table-striped">

        <thead>

<tr><th scope="col"><h4> <p class="bg-info text-white">S.No. </p></h4></th>
<th scope="col"><h4> <p class="bg-info text-white">Title </p></h4></th>
<th scope="col"><h4> <p class="bg-info text-white">Body </p></h4></th>
<th scope="col"><h4><p class="bg-info text-white">Created at</p></h3></th>
<th scope="col"><h4><p class="bg-info text-white">Updated at </p></h4></th>
<th scope="col"><h4> <p class="bg-info text-white">Actions <a   onclick="return confirm('You want to create new Post ? ')" href="#" class="btn btn-info" float="right">
    Create<i class="fas fa-plus"></i></a></p></h4></th>
</tr>
</thead>
<tbody>
<tr><td>  1   </td>
<td>    java  </td>
<td>   hello java   </td>
<td>    ddd  </td>
<td>    ddd  </td>
<td> <div class="row">
    
    <a class="btn btn-danger" >   <i class="fa fa-trash"></i></a>
    <a> <a onclick="return confirm(' Are you sure edit this ? ')" class="btn btn-primary" href="#"><i class="fas fa-edit"></i></a>  </a>
    <a class="btn btn-success" href="#"><i class="fas fa-eye"></i></a>



</td>
</tr>
</tbody>
</table>




</div>
  @include('newsportal.footer')