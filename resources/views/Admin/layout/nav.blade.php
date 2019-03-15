<!--sidebar-menu-->
<div   id="sidebar"><a href="{{url('/')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li ><a href="http://127.0.0.1:8000/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="http://127.0.0.1:8000/course/create">Add New Courses</a></li>
                <li><a href="http://127.0.0.1:8000/course">List Courses</a></li>
            </ul>
        </li>
        <li class="submenu #"> <a href="#"><i class="icon icon-th-list"></i> <span>Course Detail</span></a>
            <ul>
                <li><a href="http://127.0.0.1:8000/course/detailvalue/create">Add Course Detail</a></li>
                <li><a href="http://127.0.0.1:8000/course/detailvalue">List Course Detail</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--sidebar-menu-->
 {{-- <div class="container">
 <a  onclick="return confirm('You want to create new Post ? ')" href="http://127.0.0.1:8000/course/create" class="btn btn-info" >
                                      <i class="fas fa-plus"></i> create</a> </div> --}}
