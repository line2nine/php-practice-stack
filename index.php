<?php
include "class/Stack.php";

$myData = new Stack();

$myData->push("Nam");
$myData->push("Hoa");
$myData->push("Xuan");
$myData->push("Bach");
$myData->push("Thang");

$myData->pop();
$myData->pop();
$myData->pop();
echo "Sau khi lấy 3 phần tử: " . $myData->top() . "<br>";

$myData->push("Tin");
$myData->push("Hung");
echo "Sau khi thêm 2 phần tử: " . $myData->top() . "<br>";

$myData->pop();
$myData->pop();
$myData->pop();
$myData->pop();
$myData->pop();
echo "Sau khi lấy hết chỗ phần tử còn lại và lấy quá thêm 1 phần nữa: " . $myData->top();