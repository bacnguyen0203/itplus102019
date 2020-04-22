function validateForm()
{
    // Bước 1: Lấy giá trị của username và password
    var pwd = document.getElementById('pwd').value;

    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
    if (pwd == ''){
        alert('Cần kiểm tra các trường dấu (*) không được để trống');
    }
    else{
        alert('Dữ liệu hợp lệ');
        return true;
    }

    return false;
}