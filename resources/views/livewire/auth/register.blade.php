@extends('layouts.guest')
@section('title','Registration')
@section('content')
<div>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Get started</h1>
                            <p class="lead">
                                Start creating the best possible user experience for you customers.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Surname</label>
                                            <input class="form-control form-control-lg" type="text" name="surname"
                                                value="{{ old('surname') }}"
                                                id="surname" placeholder="Enter your name" />

                                            @error('surname')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control form-control-lg" type="text" name="first_name"
                                                value="{{ old('first_name') }}"
                                                id="first_name" placeholder="Enter your name" />

                                            @error('first_name')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="text"
                                                value="{{ old('email') }}"
                                                name="email" id="email" placeholder="Enter your email" />

                                            @error('email')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="password" id="password" placeholder="Enter password" />

                                            @error('password')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="password-confirm" id="password-confirm" placeholder="Enter password" />

                                            @error('password-confirm')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        @error('registration_failed')
                                            <p class="text-sm error-message mt-1">{{ $message }}</p>
                                        @enderror

                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            Already have account? <a href="{{ route('login') }}" wire:navigate>Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
