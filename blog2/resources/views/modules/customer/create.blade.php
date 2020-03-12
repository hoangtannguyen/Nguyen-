{{-- @include('partials.head') --}}

<body>
    {{-- @include('partials.nav') --}}
    <div class="container">
    <h3>Create </h3>
    <form action="{{ action('CustomerController@store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Tên</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên...">
        </div>
        <div class="form-group">
            <label for="title">Ngày sinh</label>
            <input type="date" class="form-control" name="dob" placeholder="Nhập ngày sinh...">
        </div>
        <div class="form-group">
            <label for="title">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Nhập email...">
        </div>
        <input type="submit" value="Create" class="btn btn-primary">
        {{-- <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button> --}}
    </form>
</div>
</body>
</html>