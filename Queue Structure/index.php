<?php
include_once 'Queue.php';

$queue = new Queue();

echo "<pre>";

$queue->enqueue('Item 0');
$queue->enqueue('Item 1');
$queue->enqueue('Item 2');

var_dump($queue);
echo "<hr>";

$queue->dequeue();
$queue->dequeue();

var_dump($queue);
echo "<hr>";

echo $queue->isEmpty();

$queue->enqueue('Item 3');
$queue->enqueue('Item 4');

var_dump($queue);
echo "<hr>";

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();

var_dump($queue);
echo "<hr>";

echo $queue->isEmpty();