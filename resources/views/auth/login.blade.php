@extends('layouts.master')
@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Login</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>login</li>
                        </ul>
                    </div>
                </div><!-- /.page-title-captions -->

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<!-- Login -->
<div class="flat-row pad-top90px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="flat-login">
                    <form class="flat-contact-form border-white border-large" id="contactform5" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}

                        <div class="field clearfix">
                            <div class="wrap-type-input">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <p>Username or email address *</p>
                                    <input type="email" value="{{ old('email') }}"  tabindex="1" name="email" id="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <p>Password *</p>
                                    <input type="password" value="" tabindex="2" name="password" id="password" required autofocus>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button>login</button>
                        </div>
                        <div class="option-login">
                            <div class="remember">
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }} name="checked" id="checked" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
                            </div>
                        </div>
                            <div class="forgot">
                                <a href="{{ route('password.request') }}">I forgot my password</a>
                            </div>
                        
                        <div class="create-account">
                            <p>Not registered? No problem</p>
                            <div class="link-submit-wrap">
                                <a href="{{ '/register' }}">create an account</a>
                            </div>
                        </div>
                    </form><!-- /.comment-form -->
                </div><!-- /.flat-login -->
            </div><!-- /.col-md-6 .col-md-offset-3 -->
        </div><!-- /.row -->
    </div><!-- /.container --><br>

@endsection
