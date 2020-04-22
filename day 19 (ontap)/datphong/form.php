
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
        var pwd3 = document.getElementById('pwd3').value;
        var pwd4 = document.getElementById('pwd4').value;
        var pwd5 = document.getElementById('pwd5').value;
        var pwd6 = document.getElementById('pwd6').value;
        var pwd7 = document.getElementById('pwd7').value;

        // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
        if (pwd == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else if (pwd2 == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else if (pwd3 == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else if (pwd4 == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else if (pwd5 == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else if (pwd6 == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else if (pwd7 == ''){
            alert('Cần kiểm tra các trường có dấu (*) không được để trống');
        }
        else{
            alert('Dữ liệu hợp lệ');
            return true;
        }

        return false;

    }
</script>
<body>

<div class="container">
    <h2 style="text-align: center"><b>ĐẶT PHÒNG ONLINE</b></h2>
    <form method="post" action="" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="pwd">Ngày đến (*):</label>
            <input type="text" class="form-control" id="pwd" placeholder="" name="pwd">
        </div>
        <div class="form-group">
            <label for="pwd2">Ngày đi (*):</label>
            <input type="date" class="form-control" id="pwd2" placeholder="" name="pwd2">
        </div>
        <div class="form-group">
            <label for="pwd3">Loại phòng (*):</label>
            <input type="text" class="form-control" id="pwd3" placeholder="" name="pwd3">
        </div>
        <div class="form-group">
            <label for="pwd4">Họ tên (*):</label>
            <input type="text" class="form-control" id="pwd4" placeholder="" name="pwd4">
        </div>
        <div class="form-group">
            <label for="pwd5">Số điện thoại (*):</label>
            <input type="number" class="form-control" id="pwd5" placeholder="" name="pwd5">
        </div>
        <div class="form-group">
            <label for="pwd6">Email (*):</label>
            <input type="email" class="form-control" id="pwd6" placeholder="" name="pwd6">
        </div>
        <div class="form-group">
            <label for="comment">Nội dung (*):</label>
            <textarea class="form-control" rows="5" id="pwd7"></textarea>
        </div>
        <div style="text-align: center">
            <button type="submit" class="btn btn-default">Đặt phòng</button>
            <button type="submit" class="btn btn-default">Nhập lại</button>
        </div>

    </>
</div>

</body>
</html>
