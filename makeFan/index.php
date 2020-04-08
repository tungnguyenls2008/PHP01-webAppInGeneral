<?php
include "Fan.php";
$fan1=new Fan(Fan::SLOW,true,10,'yellow');
$fan2=new Fan(Fan::FAST,false,5,'blue');

$fan1->toString();
echo '<br>';
$fan2->toString();