@extends('auth.layout')

@section('right')
    <div class="col-12 col-lg-6 m-auto">
        <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
                {{-- Title --}}
                <span class="mb-0 fs-1"></span>
                    <h1 class="fs-2">E-mail Verification</h1>
                    <p class="lead mb-4">You must verify your E-mail, Please check your e-mail for a verification
                        link.</p>

                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Form START --}}
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf

                    {{-- Button --}}
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0" type="submit">Resend Email</button>
                        </div>
                    </div>
                </form>
                {{-- Form END --}}

            </div>
        </div>
    </div>
@endsection
