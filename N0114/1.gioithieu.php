<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style2.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .site-wrapper {
        width: 1000px;
        margin: 0 auto;
    }

    header .header-inner {
        background: #f9f6ff;
        font-size: 26px;
        text-align: center;
        padding: 10px 0;
    }

    header .main-navigation .main-menu{
        list-style: none;
        background: #c7d818;
        padding: 0;
        margin: 0;
    }

    .main-navigation .main-menu li{
        background: orange;
        float: left;
    }

    .main-navigation .main-menu li a {
        color: wheat;
        font-size: 18px;
        display: block;
        background: orange;
        text-decoration: none;
        padding: 10px 20px;
    }

    .main-navigation .main-menu li a:hover {
        background: tomato;

    }

    section {
        text-align: center;
    }

    body {
        align-content: center;
    }
    </style>
<body>
<div class="site-wrapper">
    <header>
        <div class="header-inner">
            <h1>CÔNG TY BẤT ĐỘNG SẢN CENGROUP</h1>
        </div>
        <nav class="main-navigation">
            <ul class="main-menu clearfix">
                <li><a href="#">Trang chủ</a> </li>
                <li><a href="#">Giới thiệu</a> </li>
                <li><a href="#">Mở bán</a> </li>
                <li><a href="1.tintuc.html">Tin tức</a></li>
                <li><a href="2.dangkinhantuvan.html">Đăng kí nhận tư vấn</a> </li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <p><img src="hinh1.jpg" style="width:170px;height:170px;margin-right:15px;">
                    <b>Cập nhật tiến độ dự án ngày 16/08/2016</b><br>
                    Một số phòng đã hoàn thiện xong và có thể bàn giao cho khách hàng...
                </p>

                <p><img src="hinh2.jpg" style="width:170px;height:170px;margin-right:15px;">
                    <b>Các phòng có vị trí thích hợp cho kinh doanh</b><br>
                    Giá cả hợp lí mà không gian lại phù hợp...
                </p>

                <p><img src="hinh3.jpg" style="width:170px;height:170px;margin-right:15px;">
                    <b>Khách hàng được trả góp khi mua nhà</b><br>
                    Các bạn có thể mua nhà chỉ với 0 ngàn đồng...
                </p>

                <p><img src="hinh4.jpg" style="width:170px;height:170px;margin-right:15px;">
                    <b>Các dịch vụ, tiện ích đầy đủ</b>
                    Có đầy đủ các phòng tập Gym, bể bơi ở tầng thượng mà tầng trệt...
                </p>
            </div>
        </div>
    </section>
</body>
</html>