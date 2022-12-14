@extends('layouts.auth')

<section class="py-6 pb-9 bg-default">
<div class="p-3 mb-3 bg-secondary text-white">
   <div class="row justify-content-center text-center">
     <div class="col-md-6">
       <p class="display-4 text-black"></p>
         <p class="lead text-mint"></p>
       </div>
     </div>
  </section>
@section('login')
<center>
<div class="big-header">Sistem Informasi Penjualanan <span>Toko Barokah Jaya</span></div></center>
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="100">
            </a>
        </div>

        <form action="{{ route('login') }}" method="post" class="form-login">
            @csrf
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    
    <!-- /.login-box-body -->
    
</div>

<!-- /.login-box -->
@endsection
