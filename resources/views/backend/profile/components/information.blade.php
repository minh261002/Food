<form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div id="image-preview" class="image-preview mb-4">
        <label for="image-upload" id="image-label">Chọn Ảnh</label>
        <input type="file" name="avatar" id="image-upload" />
    </div>

    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <label for="name">Họ Và Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-12 col-md-6 mb-4">
            <label for="name">Email</label>
            <input type="text" class="form-control" id="email" name="email"
                value="{{ auth()->user()->email }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
</form>
