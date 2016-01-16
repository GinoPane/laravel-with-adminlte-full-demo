@extends('layout.backend.minimum')

@section('backend.main.header.html.styles')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/plugins/iCheck/square/blue.css') }}" >
@endsection

@section('backend.main.header.html.scripts')
@endsection

@section('backend.main.header.html.title')
    Log in
@endsection

@section('backend.main.body.class')
    hold-transition login-page
@endsection

@section('backend.minimum.content.wrapper.class')
    login-box
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="{{ route('auth.login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" id="password" class="form-control" placeholder="Password" name="password"/>
            <span id="password-visibility-toggle" class="password-toggle glyphicon glyphicon-eye-close form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
        </div>
    </form>

    <a href="{{ route('auth.reset') }}">I forgot my password</a><br>
    <a href="{{ route('auth.register') }}" class="text-center">Register a new membership</a>
</div><!-- /.login-box-body -->
@endsection

@section('backend.main.scripts')
    <!-- iCheck -->
    <script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- hideShowPassword -->
    <script src="{{ asset('/plugins/hideShowPassword/hideShowPassword.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });

        $('#password-visibility-toggle').click(function(){
            $this = $(this);

            if ($this.hasClass('glyphicon-eye-open')) {
                $this.removeClass('glyphicon-eye-open');
                $this.addClass('glyphicon-eye-close');

                $('#password').hideShowPassword(false);
            } else {
                $this.removeClass('glyphicon-eye-close');
                $this.addClass('glyphicon-eye-open');

                $('#password').hideShowPassword(true);
            }
        });
    </script>
@endsection
