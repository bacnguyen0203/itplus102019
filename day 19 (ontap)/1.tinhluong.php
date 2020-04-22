<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bảng tính lương</title>
    <link rel="stylesheet" href="2.style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Bảng tính lương</h1>

<div class="luongcantinh">
    <div class="form-group">
        <label for="usr">Lương cần tính:</label>
        <input type="text" class="form-control" id="usr">
    </div>
</div>

<div class="donvi">
    <div class="form-group">
        <label for="usr" style="margin-right: 10px">Đơn vị:</label>
        <label class="radio-inline"><input type="radio" name="optradio" checked style="margin-right: 10px">VNĐ</label>
        <label class="radio-inline"><input type="radio" name="optradio" style="margin-right: 10px">USD</label>
        <input type="" value="23.000VNĐ" class="form-control" id="usr">
    </div>
</div>

<div class="form-group">
    <label for="pwd">Mức lương đóng bảo hiểm (VNĐ):</label>
    <input type="text" class="form-control" id="pwd">
</div>

<div class="form-group">
    <label for="pwd">Số người phụ thuộc:</label>
    <input type="text" class="form-control" id="pwd">
</div>

<div id="option">
    <h2>Vùng</h2>
    <label class="radio-inline"><input type="radio" name="optradio" checked style="margin-right: 10px">Option 1</label>
    <label class="radio-inline"><input type="radio" name="optradio" style="margin-right: 10px">Option 2</label>
    <label class="radio-inline"><input type="radio" name="optradio" style="margin-right: 10px">Option 3</label>
</div>

<div id="button1">
        <button type="button" class="btn btn-primary" style="width: 430px;">GROSS -> NET</button>
        <button type="button" class="btn btn-warning" style="width: 430px; margin-top: 20px">Reset</button>
</div>

<div id="button2">
        <button type="button" class="btn btn-success" style="width: 430px">NET -> GROSS</button>
        <button type="button" class="btn btn-info" style="width: 430px; margin-top: 20px">Print</button>
    </div>

</body>
</html>