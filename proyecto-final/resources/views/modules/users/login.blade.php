@extends('welcome')
@section('login')
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ url('storage/plantilla/logo-blanco-bloque.png') }}" alt="" class="img-responsive" style="padding: 30px 100px 0px 100px;">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingreso al sistema</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" required name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                </div>
            </form>
            {{-- 
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                    using
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in
                    using
                    Google+</a>
            </div>
            --}}
            <!-- /.social-auth-links -->
            {{-- 
            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a>
            --}}
        </div>
        <!-- /.login-box-body -->
    </div>
@endsection