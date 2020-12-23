<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    From: <select name="from" id="">
        <option value="decimal">Decimal</option>
        <option value="binary">Binary</option>
    </select>
    To: <select name="to" id="">
        <option value="decimal">Decimal</option>
        <option value="binary">Binary</option>
    </select><br>
    Input: <input type="number" name="inputNum">
    <input type="submit">

</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $input = $_GET['inputNum'];

    $from = $_GET['from'];
    $to = $_GET['to'];

    if ($from == 'decimal' && $to == 'binary'){
        echo convertToBinary($input);
    }
    if ($from == 'binary' && $to == 'decimal'){
        echo convertToDecimal($input);
    }

/*    echo convertToBinary($input);*/
}

function convertToBinary($number)
{
    $stack = new SplStack();

    $quotient = $number;
    while ($quotient != 0) {
        $remainder = $quotient % 2;
        $quotient = floor($quotient / 2);
        $stack->push($remainder);
    }

    $result = '';

    while (!$stack->isEmpty()) {
        $result = $result . $stack->pop();
    }

    return $result;
}

function convertToDecimal($number)
{
    $arr = str_split($number);
    $num = count($arr);

    $result = 0;

    while ($num >= 0) {
        $num = $num - 1;
        $result += $arr[count($arr) - ($num + 1)] * pow(2, $num);
    }

    return $result;
}
