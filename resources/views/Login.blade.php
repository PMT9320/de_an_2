
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Light Bootstrap Dashboard PRO by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>



    <!--     Fonts and icons     -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='{{ asset('css/font.css') }}' rel='stylesheet' type='text/css'>

</head>
<body>



<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="orange">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post" action="{{ route('process_login') }}">
                        {{csrf_field()}}
                        
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card">
                                <div class="header text-center">Login</div>
                                <div class="content">
                                    @if (Session::has('error'))
                                        <h4>
                                          {{(Session::get('error'))}}  
                                        </h4>
                                    @endif
                                    @if (Session::has('success'))
                                        <h4>
                                          {{Session::get('success')}}
                                        </h4>
                                    @endif
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" placeholder="Enter email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="mat_khau" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

