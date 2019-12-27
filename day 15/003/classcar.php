<?php
class oto {

    public $ten;
    public $model;
    public $hang;
    public $giatien;
    public $trongluong;
    public $muctieuthuxang;

    public function __construct($ten, $model, $hang, $giatien, $trongluong, $muctieuthuxang)
    {

        $this->ten = $ten;
        $this->model = $model;
        $this->hang = $hang;
        $this->giatien = $giatien;
        $this->trongluong = $trongluong;
        $this->muctieuthuxang = $muctieuthuxang;

   }
    public function docthongtinxe() {
        echo "<br>" . __METHOD__;
        echo "<br> tên xe là: " . $this->ten;
        echo "<br> model xe là: " . $this->model;
        echo "<br> hang xe là: " . $this->hang;
        echo "<br> giá tiền xe là: " . $this->giatien;
        echo "<br> trọng lượng xe là: " . $this->trongluong;
        echo "<br> mức tiêu thụ xăng là: " . $this -> muctieuthuxang;
    }
}

$mycar = new oto("camry", "B215", "toyota", "1.5 tỉ", "8tấn", "1l/h");
echo "<pre>";
print_r($mycar);
echo "</pre>";
$mycar -> docthongtinxe();