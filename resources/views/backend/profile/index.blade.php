@extends('backend.layouts.master')

@section('title', 'Profile')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Thông Tin Cá Nhân</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Thông Tin Cá Nhân</h4>
                    </div>
                    <div class="card-body">
                        @include('backend.profile.components.information')
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Đổi Mật Khẩu</h4>
                    </div>

                    <div class="card-body">
                        @include('backend.profile.components.password')
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('admin/assets/js/page/features-post-create.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.image-preview').css({
                'background-image': 'url({{ asset(Auth::user()->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })

            $('#image-upload').change(function() {
                let file = this.files[0]
                let reader = new FileReader()
                reader.onload = function(e) {
                    $('.image-preview').css({
                        'background-image': 'url(' + e.target.result + ')',
                        'background-size': 'cover',
                        'background-position': 'center center'
                    })
                }
                reader.readAsDataURL(file)
            })
        })
    </script>
@endpush
