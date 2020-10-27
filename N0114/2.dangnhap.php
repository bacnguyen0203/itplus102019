
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đặt phòng online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
    function validateForm()
    {

        // Bước 1: Lấy giá trị của username và password
        var pwd = document.getElementById('pwd').value;
        var pwd2 = document.getElementById('pwd2').value;

        // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
        if (pwd == ''){
            alert('Tên khác rỗng');
        }
        else if (pwd2 !='admin'){
            alert('Mật khẩu là admin');
        }
        else{
            alert('Bạn đã đăng nhập thành công');
        }

        return false;

    }
</script>
<body>

<div class="container">
    <h2 style="text-align: center"><b>Đăng nhập</b></h2>
    <form method="post" action="" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="pwd">Tên:</label>
            <input type="text" class="form-control" id="pwd" placeholder="" name="pwd">
        </div>
        <div class="form-group">
            <label for="pwd2">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd2" placeholder="" name="pwd2">
        </div>
        <button type="submit" class="btn btn-default">Đăng nhập</button>
    </>
</div>


</body>
</html>
