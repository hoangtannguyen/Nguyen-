<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-12">
            <h1>Danh Sách Khách Hàng</h1>
            {{-- @include('partials.messeger') --}}
            <a class="btn btn-info" href="{{ route('customers.create') }}">Thêm mới</a>
            <br><br>
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th >STT</th>
                            <th >Tên </th>
                            <th >Ngày Sinh</th>
                            <th >Email</th>
                            <th colspan="3">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($customers) == 0)
                        <td colspan="5">Không có dữ liệu</td>
                        @else
                        @foreach ($customers as $key => $customer)
                        <tr>
                            <th >{{ ++$key }}</th>
                            <td>{{ $customer['name'] }}</td>
                            <td>{{ $customer['dob'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            </td>
                            <td><a href="{{ route('customers.show', $customer->id) }}">Hiển Thị</a></td>
                            <td><a href="{{ route('customers.edit', $customer->id) }}">Sửa</a></td>
                            <td>
                                <form method="post" action="{{ route('customers.destroy', $customer->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>