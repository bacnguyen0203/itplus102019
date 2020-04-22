<!DOCTYPE html>
<html>
<head>
    <title>Freetuts.net - Validate form = Javascript</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript">
        function validateForm()
        {


                // Bước 1: Lấy giá trị của username và password
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;

                // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
                if (username == ''){
                    alert('Bạn chưa nhập tên đăng nhập');
                }
                else if (password == '')
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
<form method="post" action="" onsubmit="return validateForm()">
    Username: <input type="text" name="username" id="username" value=""/> <br/><br/>
    Password: <input type="password" name="password" id="password" value=""/> <br/><br/>
    <input type="submit" name="login" value="Login"/>
</form>
</body>
</html>