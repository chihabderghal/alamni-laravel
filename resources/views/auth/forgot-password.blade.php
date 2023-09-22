@extends('auth.layout')

@section('right')
    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
                {{-- Title --}}
                <span class="mb-0 fs-1"></span>
                <h1 class="fs-2">Forgot Your Password?</h1>
                <p class="lead mb-4">Reset your password here:</p>

               @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
               @endif

                {{-- Form START --}}
                <form action="{{ route('password.request') }}" method="POST">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                    class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1"
                                   placeholder="E-mail" id="exampleInputEmail1" name="email">
                        </div>
                        @error('email')
                        <span class="invalid-feedback is-invalid" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{-- Button --}}
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
                {{-- Form END --}}

                {{-- Sign up link --}}
                <div class="mt-4 text-center">
                    <span>Don't have an account? <a href="{{ route('register') }}">Register here</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
