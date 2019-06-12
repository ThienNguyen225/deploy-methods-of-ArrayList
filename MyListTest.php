<?php
include "MyList.php";

$myList = new MyList();
$myList->add(0, 12);
$myList->add(1, 13);
$myList->add(2, 15);
$myList->add(3, 11);
$myList->add(4, 10);
$myList->add(5, 19);
$myList->add(6, 14);
$myList->add(7, 17);
print_r($myList);
echo "<br>";

$myList->remove(2);
print_r($myList);
echo "<br>";

$myList->getSize();
echo "<br>";

$myList->contains(1);
print_r($myList);
echo "<br>";

$myList->indexOf(10);
echo "<br>";

$myList->booleanAdd(20);
print_r($myList);
echo "<br>";

$myList->get(6);
echo "<br>";

$myList->clear();
print_r($myList);