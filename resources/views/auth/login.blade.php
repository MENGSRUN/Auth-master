@extends('layouts.main')

@section('title')
    ABC-login
@endsection


@section('body')
<form class="row g-3" action="{{ route('authenticate') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="yourUsername" class="form-label">Username</label>
        <input type="text" autofocus name="username"
            class="form-control @error('username'){{ 'is-invalid' }}@enderror"
            id="yourUsername" value="{{ old('username') }}">
        <div class="invalid-feedback">
            @error('username')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password"
            class="form-control @error('password'){{ 'is-invalid' }}@enderror"
            id="yourPassword">
        <div class="invalid-feedback">
            @error('password')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember"
                value="true" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>
    {{-- <div class="col-12">
<p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
</div> --}}
</form>
    
@endsection