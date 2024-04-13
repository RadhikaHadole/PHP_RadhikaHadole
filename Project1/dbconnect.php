<?php


$connect=mysqli_connect("localhost","root","","project1");

if(!$connect)
{
    echo"Not connected Database, contact administrator";
}
?>