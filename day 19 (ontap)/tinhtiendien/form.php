<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính tiền điện</title>
    <style type="text/css">
        table tr td{
            border: double;
            padding: 10px;
            border: double;
        }


        table {
            padding: 150px;

        }
    </style>
</head>
<body>
<?php
// gán mặc định tiêu thụ nước là 0
$watercomsume = 0;
if (isset($_POST["watercomsume"]) && ($_POST["watercomsume"] > 0)) {
    // số mét khối tiêu thụ
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

        <table>
            <tr>
                <th colspan="2" style="background-color: #6c757d; color: white; padding: 10px; font-size: 20px">Tính tiền điện</th>

            </tr>
            <tr>
                <td>Nhập số KW điện: </td>
                <td><input style="padding-right: 520px" stype="text" name="watercomsume" value="<?php echo $watercomsume ?>"></td>
            </tr>
            <tr>
                <td>0KW - 100KW</td>
                <td>2.000đ/KW</td>
            </tr>
            <tr>
                <td>101KW - 200KW</td>
                <td>100KW giá 2.000đ/KW còn lại giá 3.000đ/KW</td>
            </tr>
            <tr>
                <td>201KW - 500KW</td>
                <td>100KW giá 2.000đ/KW, 100KW giá 3.000đ/KW còn lại giá 5.000đ/KW</td>
            </tr>
            <tr>
                <td>Trên 500KW</td>
                <td>100KW giá 2.000đ/KW, 100KW giá 3.000đ/KW, 100KW giá 3.000đ/KW
                    còn lại giá 10.000đ/KW</td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Tính tiền"></td>
                <td> Tổng tiền: <?php echo $total1 ?></td>
            </tr>
        </table>
<?php
// số mét khối còn lại sau khi trừ đi từng mốc
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
<?php } ?>
</body>
</html>
