@extends('user.maket')

@section('title', 'Login')

@section('content')
<div class="box">
    <div class="register-box">
        <div class="register-logo">
            <b>Login</b>
        </div>

        <div class="card">
            <div class="card-body register-card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4 ">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection