
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>peritechno</title>

    <!-- Bootstrap -->
    <link href="{{ asset('b-n/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('b-n/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('b-n/css/custom.min.css') }}">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <img src="{{ asset('f-n/images/logo1.png')}}" with="80px" height="80px" alt="">
              <h1>Silahkan Masuk</h1>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
              </div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="buttons">
               <button type="submit" class="btn btn-success btn-lg">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa"></i>peritechno</h1>
                  <p>©2017 All Rights Reserved. peritechno Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
