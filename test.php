<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript">
        function validateForm()
        {


            // Bước 1: Lấy giá trị của username và password
            var email = document.getElementById('email').value;
            var pwd = document.getElementById('pwd').value;

            // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
            if (email == ''){
                alert('Bạn chưa nhập tên đăng nhập');
            }
            else if (pwd == '')
            {
                alert('Bạn chưa nhập mật khẩu');
            }
            else{
                alert('Dữ liệu hợp lệ, ta có thể chấp nhận submit form');
                return true;
            }

            return false;

        }
    </script>
</head>
<body>
<form action="/action_page.php" method="post" onsubmit="return validateForm()">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>