<?php

session_name("oozeball");
session_start();

foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}

$string = $_POST['name'] . "," . $_POST['email'] . "," . $_POST['phone'] . "," . $_POST['size'] . ",". $_POST['day'] . "," . $_POST['time'] . "," . $_POST['payment'] . "," . date("m-d-y H:i:s") . "\n";

$filename = "single.csv";
$handle = fopen($filename, "a");
fwrite($handle, $string);
fclose($handle);

header('Location: teams.php');

function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}
?>