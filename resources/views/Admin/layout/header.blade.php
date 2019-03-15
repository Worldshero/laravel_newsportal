
<div class="container">
<nav class=" navbar navbar-static-top " style="background-color:#2E363F;">
        <h4>Admin panal</h4>
          <ul class=" nav navbar-nav">
              <li class="dropdown float-right"  style="">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>  Welcome {{ Auth::user()->Name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right " style="position:absolute;">

                      <a class="dropdown-item" href="#">Welcome {{ Auth::user()->Name }}</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item btn btn-outline-info" href="#">     <i class="fas fa-user-circle">Your Profile</i></a>
                      <a class="dropdown-item btn btn-outline-info" href="#">     <i class="fas fa-cogs">Settings</i></a>

                     <a class="dropdown-item btn btn-outline-primary" href="http://127.0.0.1:8000/logout"> <i class="fas fa-sign-out-alt">LogOut</i></a>
                  </div>
              </li>
          </ul>
      </nav>
</div>
