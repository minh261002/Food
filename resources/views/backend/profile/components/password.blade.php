<form action="{{ route('admin.profile.change-password') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-12 col-md-6 form-group mb-4">
            <label for="current_password">Mật Khẩu Hiện Tại</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
            <span class="text-danger">{{ $errors->first('current_password') }}</span>
        </div>

        <div class="col-12 col-md-6"></div>

        <div class="col-12 col-md-6 form-group mb-4">
            <label for="password">Mật Khẩu Mới</label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="text-danger">{{ $errors->first('password') }}</span>
        </div>

        <div class="col-12 col-md-6"></div>


        <div class="col-12 col-md-6 form-group mb-4">
            <label for="password_confirmation">Nhập Lại Mật Khẩu Mới</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
</form>
