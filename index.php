<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container p-5 my-5 border d-flex justify-content-center">
        <h1 class="text-warning">Калькулятор</h1>
    </div>
    <div class="container p-5 my-5 border d-flex justify-content-center">
        <h1 id='error' style='color:red;'></h1>
        <?php include "calc.php" ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="btn-group">
                <div class="row">
                    <div class="col">
                        <input id="text_form" class="special" type="text" value="<?= $showRes ?>" placeholder="0" name="num" size="7">
                        <input type="submit" class="btn btn-outline-warning special" value="&#8594;" name="equal">
                        <input type="submit" class="btn btn-outline-warning special" value="0" name="0">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-outline-warning" value="+" name="plus">
                        <input type="submit" class="btn btn-outline-warning" value="1" name="1">
                        <input type="submit" class="btn btn-outline-warning" value="2" name="2">
                        <input type="submit" class="btn btn-outline-warning" value="3" name="3">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-outline-warning" value="-" name="minus">
                        <input type="submit" class="btn btn-outline-warning" value="4" name="4">
                        <input type="submit" class="btn btn-outline-warning" value="5" name="5">
                        <input type="submit" class="btn btn-outline-warning" value="6" name="6">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-outline-warning" value="&divide;" name="division">
                        <input type="submit" class="btn btn-outline-warning" value="7" name="7">
                        <input type="submit" class="btn btn-outline-warning" value="8" name="8">
                        <input type="submit" class="btn btn-outline-warning" value="9" name="9">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-outline-warning" value="&times;" name="multiplication">
                        <input type="submit" class="btn btn-outline-warning" value="&#8730;" name="square_root">
                        <input type="submit" class="btn btn-outline-warning" value="." name="point">
                        <input type="submit" class="btn btn-outline-warning" value="&#8635;" name="clear">
                    </div>
                </div>
            </div>
            <input type="hidden" name="hidden" size="50" value="<?= $res ?>">
            <input type="hidden" name="hidden_sign" size="50" value="<?= $sign ?>">
            <input type="hidden" name="hidden_nums" size="50" value="<?= $nums ?>">
        </form>
    </div>
</body>

</html>