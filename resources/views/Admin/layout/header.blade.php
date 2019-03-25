
<div class="container">
<nav class=" navbar navbar-static-top " style="background-color:#2E363F;">
        <h4>Admin panal</h4>
          <ul class=" nav navbar-nav">
              <li class="dropdown float-right"  style="">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>  Welcome {{ Auth::user()->Name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right " style="position:absolute;">

                      <a class="dropdown-item" href="#"><h5>Signed in as</h5><i class="fas fa-user-alt"></i> {{ Auth::user()->Name }}</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item btn btn-outline-info" href="http://127.0.0.1:8000/user"> Your Profile</a>
                      <a class="dropdown-item btn btn-outline-info" href="#">Settings</a>
                    <div class="row">
                    <div class="col-md-4 offset-md-1 ">
                        <a class="dropdown-item " href="http://127.0.0.1:8000/logout">Logout</a>
                    </div>
                    <div class="col-md-3">
                        <a class="dropdown-item " href="">Cancel</a>
                    </div>
                </div>
                    </div>
              </li>
          </ul>
      </nav>
</div>
