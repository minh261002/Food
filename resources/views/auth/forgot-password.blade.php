@extends('frontend.layouts.master')

@section('title', 'Forgot Password')
@section('content')

    <section class="fp__signin" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>Forgot Password</h2>
                            <p>Forgot your password? No problem. Just let us know your email address and we will email you a
                                password reset link that will allow you to choose a new one.</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>Email</label>
                                            <input type="email" placeholder="Email" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">Verify Email</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ route('login') }}" class="text-sm text-default underline">Back to login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $('form').submit(function() {
            $(this).find('button[type="submit"]').html(
                '<i class="fa fa-spinner fa-spin"></i> Please wait...'
            );
        });
    </script>
@endpush
