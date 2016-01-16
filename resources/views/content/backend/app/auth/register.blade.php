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

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{ route('auth.register') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name') }}"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name') }}"/>
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" class="form-control" placeholder="Password" name="password"/>
                <span id="password-visibility-toggle" class="password-toggle glyphicon glyphicon-eye-close form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div><!-- /.col -->
            </div>
        </form>

        <a href="{{ route('auth.login') }}" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
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