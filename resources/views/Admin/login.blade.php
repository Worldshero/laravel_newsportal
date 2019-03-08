@extends('newsportal.master')

                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                         @endif
                         <div class="container-fluid">
                                <div class="container" style="background-image: url('storage/img/002.jpg');  width: 50%; background-size: cover; background-repeat: no-repeat;">
                                  <h2 class="text-center" id="title">Login with details</h2>
                                    <hr>
                        <div class="row">
                         <div class="col-md-5 offset-md-4">
                             <form role="form"  method="POST" action="/login">
                                {{ csrf_field() }}
                                  <fieldset>
                          <div class="form-group">
                           <input type="email" name="email" id="email" value=" {{old('email')}}" class="form-control input-lg" placeholder="Email" required>
                          </div>
                          <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
          </div>
          <div>
              <input type="submit" class="btn btn-md btn-primary" value="Login">
              <a  href="http://127.0.0.1:8000/register" class="btn btn-md btn-info offset-md-2" >Signup <i class="fas fa-sign-in-alt"></i></a>
          </div>

       </fieldset>
</form>
</div>

</div>


</div>
          </div>
