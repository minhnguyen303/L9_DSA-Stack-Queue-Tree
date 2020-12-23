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
<form action="" method="post">
    Input String: <input type="text" name="input">
    <input type="submit" value="Check">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['input'] != '') {
    $input = $_POST['input'];

    $stack = new SplStack();
    $queue = new SplQueue();

    $str_array = str_split($input);

    $result = "Chuỗi có đối xứng";

    foreach ($str_array as $item) {
        $stack->push($item);
        $queue->enqueue($item);
    }

    for ($i = 0; $i < count($str_array); $i++) {
        $str1 = $stack->pop();
        $str2 = $queue->dequeue();
        if ($str1 != $str2){
            $result = "Chuỗi không đối xứng";
            break;
        }
    }

    echo $result;
}



