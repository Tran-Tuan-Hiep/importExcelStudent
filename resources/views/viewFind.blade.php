<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Page Find Student</title>
</head>
<style>
    body{
        margin-top: 35px;
    }
    footer {
        text-align: center;
        background-color: forestgreen;
        padding: 15px;
        color: aliceblue;
        font-size: 17px;
        margin-top: 215px;
    }
    h1 {
        color: forestgreen;
        margin-bottom: 40px;
        font-family: initial;
    }
    #fullname, #id_student {
        width: 300px;
    }
    .container {
        padding: 20px;
        text-align: center;
    }
    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        margin-left: 230px;
    }
    .col-75 {
        float: left;
        margin-top: 6px;
    }
    .row:after {
        content: "";
        display: table;
        clear: both;
        padding: 10px;
    }
    table{
        margin-top: 50px;
    }
    th{
        background-color: #5cb85c;
        text-align: center;
    }
</style>
<body>
    <div class="container">
        <form action="" method="get">
            <div>
                <h1>TRA CỨU THÔNG TIN TUYỂN SINH</h1>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fullname">Họ tên</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fullname" name="fullname" placeholder="Nhập họ tên học sinh cần tìm ...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="id_student">Mã học sinh</label>
                </div>
                <div class="col-75">
                    <input type="text" id="id_student" name="id_student" placeholder="Nhập mã học sinh cần tìm ...">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Tìm kiếm</button>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="width: 150px">Mã học sinh</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($std as $item)
                        <tr>
                            <td>{{ $item->id_student }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
</body>
<footer>
    <p>Copyright by Trần Tuấn Hiệp</p>
</footer>

</html>
