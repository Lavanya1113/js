<?php
if($_GET['fname']||$_GET['email'])
{
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $email=$_GET['email'];
    echo "welcome".$_GET['fname']."<br>";
    echo "your lastname".$_GET['lname']."<br>";
    echo "your email id:".$_GET['email']."<br>";
    exit();
}