@extends('Admin.layout.master')
@section('content')
<div class="container" style="background-image: url('storage/img/bnr.png'); width: 50%; background-size: cover; background-repeat: no-repeat;">
 <h3 style="text-align:center;">Welcome {{ Auth::user()->Name }}</h3>
</div>

{{-- //<img class="card-img-top" src="storage/img/bnr.png" alt="Card image cap"> --}}

<div class="row" style="margin-top:2%;">

    <div class="col-md-4 offset-md-1 ">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="storage/img/user.png" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
    </div>

            <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">

                        <div class="form-group">
                                        <fieldset disabled="">
                                          <label class="control-label" for="disabledInput">Name</label>
                                          <input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->Name }}" disabled="">
                                        </fieldset>
                                        <fieldset disabled="">
                                                <label class="control-label" for="disabledInput">Email</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->Email }}" disabled="">
                                        </fieldset>
                                        <fieldset disabled="">
                                                <label class="control-label" for="disabledInput">Mobile</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                              </fieldset>
                                              <fieldset disabled="">
                                                    <label class="control-label" for="disabledInput">Role</label>
                                                    <input class="form-control" id="disabledInput" type="text" placeholder="Admin" disabled="">
                                                  </fieldset>
                                                  <fieldset disabled="">
                                                        <label class="control-label" for="disabledInput">Date of Joining</label>
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->created_at }}" disabled="">
                                                      </fieldset>
                                         <div class="row">

                                             <div class="col-md-3 offset-md-9">
                                            <button type="button" class="btn btn-primary">Update</button>

                                             </div>
                                            </div>

                        </div>
                      </div>
                    </div>
                  </div>
        </div>
</div>


@endsection
@section('javascript')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
  <script type="text/javascript">

    function goPage (newURL) {


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

