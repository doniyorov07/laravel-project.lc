@extends("auth.layout")

@section('title') @lang("auth.Register") @endsection

@section('content')

<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ route('register.handle') }}" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ route('register.handle') }}" method="post">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ old('first_name') }}" name="first_name" placeholder="First name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('first_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control"  value="{{ old('last_name') }}" name="last_name" placeholder="Last name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('last_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="username"  value="{{ old('username') }}" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('username')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control"  value="{{ old('email') }}" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
              

                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>


@endsection