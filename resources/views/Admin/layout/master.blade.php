
<!DOCTYPE html>
<html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
              <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
              <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
              <link rel="stylesheet" href="{{asset('css/colorpicker.css')}}" />
              <link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
              <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
              <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}" />
              <link rel="stylesheet" href="{{asset('css/matrix-style.css')}}" />
              <link rel="stylesheet" href="{{asset('css/matrix-media.css')}}" />
              <link rel="stylesheet" href="{{asset('css/bootstrap-wysihtml5.css')}}" />
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
              <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
              <link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}" />
              <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
              {{-- <link rel="stylesheet" href="{{ asset('/css/custom.css') }}"> --}}
              {{-- <link rel="stylesheet" href="{{ asset('/css/login.css') }}"> --}}
            </head>
                 <body>
                     @include('Admin.layout.header')
                     @include('Admin.layout.nav')
                        <!--main-container-part-->
                     <div id="content">
                     @yield('content')
                     </div>
                     {{-- footer --}}
                     @include('Admin.layout.footer')
                     @yield('javascript')
                </body>
         </html>
