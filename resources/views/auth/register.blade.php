@extends('auth.layout')

@section('right')

    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
                {{-- Title --}}
                <h2>Register for your account!</h2>
                <p class="lead mb-4">Nice to see you! Please Register with your account.</p>

                {{-- Form START --}}
                <form action="{{ route('register') }}" method="post">
                    @csrf

                        {{-- Name --}}
                        <div class="mb-4">
                            <label for="" class="form-label">Your Name:</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                        class="bi bi-person"></i></span>
                                <input class="form-control border-0 bg-light rounded-end ps-1 @error('name') is-invalid @enderror"
                                       placeholder="Name" id="" name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    {{-- Email --}}
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email address:</label>
                        <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                        class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1 @error('email') is-invalid @enderror"
                                   placeholder="E-mail" id="exampleInputEmail1" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="mb-4">
                        <label for="inputPassword5" class="form-label">Password:</label>
                        <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                        class="fas fa-lock"></i></span>
                            <input type="password" class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror"
                                   placeholder="*********" id="inputPassword5" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-4">
                        <label for="inputPassword6" class="form-label">Confirm Password:</label>
                        <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                        class="fas fa-lock"></i></span>
                            <input type="password" class="form-control border-0 bg-light rounded-end ps-1"
                                   placeholder="*********" id="inputPassword6" name="password_confirmation">
                        </div>
                    </div>

                    {{-- Button --}}
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Register</button>
                        </div>
                    </div>
                </form>
                {{-- Form END --}}

                {{-- Sign up link --}}
                <div class="mt-4 text-center">
                    <span>Already have an account?<a href="{{ route('login') }}"> Login in here</a></span>
                </div>

                {{-- Social buttons and divider --}}
                <div class="row">
                    {{-- Divider with text --}}
                    <div class="position-relative my-4">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                    </div>

                    {{-- GOOGLE BUTTON --}}
                    <div class="col-xxl-6 d-grid">
                        <a href="" class="btn bg-google mb-2 mb-xxl-0">
                            <i class="fab fa-fw fa-google text-white me-2"></i>
                            Continue with Google
                        </a>
                    </div>
                    {{-- FACEBOOK BUTTON --}}
                    <div class="col-xxl-6 d-grid">
                        <a href="" class="btn bg-facebook mb-0">
                            <i class="fab fa-fw fa-facebook-f me-2"></i>
                            Continue with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
