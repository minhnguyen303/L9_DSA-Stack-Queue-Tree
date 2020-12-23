<?php
include_once 'Stack.php';

$stack = new Stack(10);
for ($i = 0;$i <5;$i++){
    $stack->push("Item $i");
}

echo "<pre>";
var_dump($stack);
echo "<hr>";

$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack);
echo "<hr>";

$stack->push("Item Push 1");
$stack->push("Item Push 2");

var_dump($stack);
echo "<hr>";

echo $stack->isEmpty();

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack);
echo "<hr>";

echo $stack->isEmpty();