<?php
require_once 'long/sinhvien.php';
require_once 'tuan/sinhvien.php';

echo __FILE__;

$sinhvien1 = new long\sinhvien();
$sinhvien1 -> showInfo();

$sinhvien2 = new long\sinhvien();
$sinhvien2 -> showInfo();
