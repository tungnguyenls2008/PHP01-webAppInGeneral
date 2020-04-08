<?php
include "Stopwatch.php";
function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}
$arr=[];
for ($i = 0; $i < 20000; $i++) {
    $arr[] = $i * rand(1, 100000);
}
$stopWatch=new Stopwatch();
$stopWatch->start();
echo 'Start time: '.$stopWatch->getStartTime().'<br>';
selectionSort($arr);
$stopWatch->stop();
echo 'End time: '.$stopWatch->getEndTime().'<br>';
echo 'Elapsed time: '.$stopWatch->getElapsedTime().' milliseconds';