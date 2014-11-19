<?php
$host = 'localhost';
$user = 'test';
$pass = 'test';
$dbname = 'test';
$link = mysqli_connect($host, $user, $pass, $dbname) or die("Error" . mysqli_error($link));
$name = $_POST['name'];
$text = $_POST['text'];
//echo $name;
//echo $text;
//$add = 'INSET INTO comment SET name="'.$_POST['name'].'",text="'.$_POST['text'].'"';
//$com_result = mysqli_query ($link, $com);
$add = "INSERT INTO comment SET name='$name',text='$text'";
$com_add = mysqli_query ($link, $add); 
?>
<meta http-equiv="Refresh" content="1;url=index.php">