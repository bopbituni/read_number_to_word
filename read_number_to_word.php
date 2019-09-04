<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        padding: 12px 10px 12px 10px;
        border-radius: 30px;
        border: 2px solid olive;
        font-size: 18px;
    }

    #submit {
        border-radius: 20px;
        font-size: 18px;
        padding: 10px 32px;
    }
</style>
<body>
<h2>Ứng dụng đổi số thành chữ</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập số cần đọc...">
    <input type="submit" id="submit" value="Đọc">
</form>
<?php
$dictionary_number = [
    "0" => "không",
    "1" => "một", "2" => "hai", "3" => "ba",
    "4" => "bốn", "5" => "năm", "6" => "sáu",
    "7" => "bảy", "8" => "tám", "9" => "chín"
];
$dictionary_numbers = [
    "0" => "không",
    "1" => "một", "2" => "hai", "3" => "ba",
    "4" => "bốn", "5" => "năm", "6" => "sáu",
    "7" => "bảy", "8" => "tám", "9" => "chín"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchnumber = $_POST["search"];
    $flag = false;
    foreach ($dictionary_number as $word => $description) {
        if ($searchnumber == $word && $searchnumber >= 0 && $searchnumber < 10) {
            echo "Số: " . $word . "<br/> Được đọc là: " . $description;
            $flag = true;
        } else if ($searchnumber >= 10 && $searchnumber < 20 && $searchnumber == "1" . $word) {
            echo "Số: " . "1" . $word . "<br/> Được đọc là: " . "mười " . $description;
        }
        foreach ($dictionary_numbers as $words => $descriptions) {

            if ($searchnumber == $words . $word && $searchnumber >= 20 && $searchnumber < 100) {
                echo "Số: " . $words . $word . "<br/> Được đọc là: " . $descriptions . " mươi " . $description;
            }
        }

    }
}
?>
</body>
</html>