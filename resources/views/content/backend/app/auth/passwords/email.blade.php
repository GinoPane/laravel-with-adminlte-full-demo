@extends('layout.backend.minimum')

@section('backend.main.header.html.styles')
@endsection

@section('backend.main.header.html.scripts')
@endsection

@section('backend.main.header.html.title')
    Password Recovery
@endsection

@section('backend.main.body.class')
    hold-transition login-page
@endsection

@section('backend.minimum.content.wrapper.class')
    login-box
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

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
        <p class="login-box-msg">Reset Password</p>
        <form action="{{ route('auth.email') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-2">
                </div><!-- /.col -->
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
                </div><!-- /.col -->
                <div class="col-xs-2">
                </div><!-- /.col -->
            </div>
        </form>

        <a href="{{ route('auth.login') }}">Log in</a><br>
        <a href="{{ route('auth.register') }}" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->

@endsection
