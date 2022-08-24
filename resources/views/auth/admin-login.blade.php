@extends('layouts.admin')

@section('content')

<div class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
<div class="col-md-6">
    <div class="card mx-4">
        <div class="card-body p-4">
            <h1>Laravel Admin Panel</h1>

            <p class="text-muted">Login</p>


            <form method="POST" action="{{ route('login') }}">

                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <input id="email" name="email" type="text" class="form-control" required autocomplete="email" autofocus placeholder="Email" value="">

                                        </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>

                    <input id="password" name="password" type="password" class="form-control" required placeholder="Password">

                                        </div>

                <div class="input-group mb-4">
                    <div class="form-check checkbox">
                        <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                        <label class="form-check-label" for="remember" style="vertical-align: middle;">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary px-4">
                            Login
                        </button>
                    </div>
                    <div class="col-6 text-right">
                                                        <a class="btn btn-link px-0" href="https://38278-d59a5ea7fc9790e7.quickadminpanel.com/password/reset">
                                Forgot your password?
                            </a><br>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
    </div>
</div>

@endsection
