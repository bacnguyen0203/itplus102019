<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính tiền điện</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        p {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<h1 style="text-align: center; padding-top: 20px">TÍNH TIỀN ĐIỆN</h1>
<?php
$watercomsume = 0;
if (isset($_POST["watercomsume"]) && ($_POST["watercomsume"] > 0)) {
      $watercomsume = $_POST["watercomsume"];
}
$watersInfo = [
    ["level" => "mức 1", "info" => "1 - 100KW", "total" => 100,
        "consume" => 0, "price" => 2000, "sum_price" => 0],
    ["level" => "mức 2", "info" => "101 - 200KW", "total" => 100,
        "consume" => 0, "price" => 3000, "sum_price" => 0],
    ["level" => "mức 3", "info" => "201 - 500KW", "total" => 300,
        "consume" => 0, "price" => 5000, "sum_price" => 0],
    ["level" => "mức 4", "info" => "500KW Trở lên", "total" => null,
        "consume" => 0, "price" => 10000, "sum_price" => 0],
];
?>

<div id="wrap" style="width: 650px; margin: auto;background: #ffd46f; padding: 20px">
    <form name="tinhtien" action="" method="post">
        <p>
            <label>Nhập số điện tiêu thụ </label>
            <input type="text" name="watercomsume" value="<?php echo $watercomsume ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Tính tiền">
        </p>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th>Mức</th>
            <th>Thông tin</th>
            <th>Số KW điện tiêu thụ thực</th>
            <th>Giá tiền 1 KW điện</th>
            <th>Số tiền</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $rest = $watercomsume;
        $total1 = 0;
        foreach($watersInfo as $watersInfoKey => $watersInfoVal) {
            if ($watersInfoVal["total"] > 0) {
                if ($rest > $watersInfoVal["total"]) {
                    $rest = $rest - $watersInfoVal["total"];
                    $watersInfo[$watersInfoKey]["consume"] = $watersInfoVal["total"];
                } else {
                    $watersInfo[$watersInfoKey]["consume"] = $rest;
                    $rest = 0;
                }
            } else {
                $watersInfo[$watersInfoKey]["consume"] = $rest;
            }
            $watersInfo[$watersInfoKey]["sum_price"] = $watersInfo[$watersInfoKey]["consume"]*$watersInfo[$watersInfoKey]["price"];
            $total1 = $total1 + $watersInfo[$watersInfoKey]["sum_price"];
            ?>
            <tr>
                <td><?php echo $watersInfoVal["level"] ?></td>
                <td><?php echo $watersInfoVal["info"] ?></td>
                <td><?php echo $watersInfo[$watersInfoKey]["consume"] ?></td>
                <td><?php echo $watersInfoVal["price"] ?></td>
                <td><?php echo $watersInfo[$watersInfoKey]["sum_price"] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <p>Tổng số điện tiêu thụ : <?php echo $watercomsume ?></p>
    <p>Tổng tiền: <?php echo $total1 ?></p>

</div>
<?php
?>
</body>
</html>