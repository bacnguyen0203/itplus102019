<?php
$waters = [
    ["level" => 1, "label" => "0 - 100", "total" => 100],
    ["level" => 2, "label" => "101 - 200", "total" => 100],
    ["level" => 3, "label" => "201 - 500", "total" => 300],
    ["level" => 4, "label" => "trên 500", "total" => null],
];
$totalComsume = 501;
foreach ($waters as $watersKey => $watersVal) {
    $waters[$watersKey]["real"] = $totalComsume-$waters[$watersKey]["total"];
}