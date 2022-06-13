<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Student Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        img{
            border-radius: 50%
        }
        footer {
            text-align: center;
            background-color: forestgreen;
            padding: 15px;
            color: aliceblue;
            font-size: 17px;
            margin-top: 215px;
        }
        h1{
            color: forestgreen;
            margin-bottom: 40px;
            font-family: initial;
        }
        body {
            margin-top: 30px;
        }
        button{
            margin-left: 30px;
        }
        .div1 {
            text-align: center;
            padding: 35px;
        }
        .div2{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="div1">
                    <h1>TRA CỨU THÔNG TIN TUYỂN SINH</h1>
                    <img src="{{ url('public/image/logo.png') }}">
                </div>
                <div class="div2">
                    <div class="form-control" style="width: 500px">
                        <input type="file" name="file">
                    </div>
                    <button class="btn btn-success">Import</button>
                </div>
            </div>
        </form>
    </div>
</body>
<footer>
    <p>Copyright by Trần Tuấn Hiệp</p>
</footer>
</html>
