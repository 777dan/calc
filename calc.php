<?php
$res = 0;
$showRes = "";
$sign = "";
// $num = "";
$nums = "";

// echo $_GET['hidden_arrNum'][0];

$calcArr = [
    'plus' => '+',
    'minus' => '-',
    'division' => '/',
    'multiplication' => '*'
];

$inputUser = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "point"];

for ($i = 0; $i < count($inputUser); $i++) {
    if (isset($_GET[$inputUser[$i]])) {
        $nums = $_GET['hidden_nums'];
        $numsLength = strlen($nums);
        $nums[$numsLength] = $_GET[$inputUser[$i]];
        // echo $nums;
        $res = $_GET['hidden'];
        $sign = $_GET['hidden_sign'];
        $showRes = $nums;
        break;
    }
}

foreach ($calcArr as $key => $value) {
    if (isset($_GET[$key])) {
        $count = 0;
        for ($i = 0; $i < strlen($_GET['num']); $i++) {
            if ($_GET['num'][$i] == ".") {
                $count++;
            }
        }
        if (preg_match_all("#\D#", $_GET['num']) && $count != 1) {
            print "<script>document.getElementById('error').innerHTML = 'Введите число';</script>";
            break;
        }
        if (preg_match_all("#\d#", $_GET['num'])  && $count == 1) {
            $sign = $_GET['hidden_sign'] . $value;
            $res = $_GET['hidden'] + $_GET['num'];
            break;
        } else {
            print "<script>document.getElementById('error').innerHTML = 'Неизвестная ошибка';</script>";
            break;
        }
    }
}

if (isset($_GET['square_root'])) {
    $showRes = round(sqrt($_GET['num']), 3);
}

if (isset($_GET['equal'])) {
    $count = 0;
    for ($i = 0; $i < strlen($_GET['hidden']); $i++) {
        if ($_GET['hidden'][$i] == ".") {
            $count++;
        }
    }
    if (preg_match_all("#\D#", $_GET['num']) && $count != 1) {
        print "<script>document.getElementById('error').innerHTML = 'Введите число';</script>";
    }
    if (preg_match_all("#\d#", $_GET['num'])  && $count == 1) {
        $res = $_GET['hidden'] + $_GET['num'];
        $sign = $_GET['hidden_sign'];
        switch ($sign) {
            case "+":
                $res = $_GET['hidden'] + $_GET['num'];
                break;
            case "-":
                $res = $_GET['hidden'] - $_GET['num'];
                break;
            case "/":
                $res = $_GET['hidden'] / $_GET['num'];
                break;
            case "*":
                $res = $_GET['hidden'] * $_GET['num'];
                break;
        }
        $showRes = round($res, 3);
        $res = 0;
        $sign = "";
    } else {
        print "<script>document.getElementById('error').innerHTML = 'Неизвестная ошибка';</script>";
    }
}

if (isset($_GET['clear'])) {
    header("Location: " . $_SERVER['PHP_SELF']);
    ob_end_flush();
    exit;
}
