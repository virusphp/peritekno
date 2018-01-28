@extends('layouts.master')
@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Gabung Di PeriTechno</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>register</li>
                        </ul>
                    </div>
                </div><!-- /.page-title-captions -->

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->


<div class="flat-row pad-top90px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="flat-login">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="field clearfix">
                            <div class="wrap-type-input">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <p>Username *</p>
                                        <input id="name" type="text" tabindex="1" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <p>E-Mail Address *</p>
                                <input id="email" type="email" tabindex="2" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <p>Password *</p>
                                  <input id="password" tabindex="2" type="password" tabindex="2" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group">
                          <p>Konfirmasi Password *</p>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>


                        <div class="submit-wrap">
                            <button>GABUNG</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
