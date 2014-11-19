<?php
//connect
$host = 'localhost';
$user = 'test';
$pass = 'test';
$dbname = 'test';
$link = mysqli_connect($host, $user, $pass, $dbname) or die("Error" . mysqli_error($link));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment</title>
	<style type="text/css">
   .name {
    width: 200px;
   }
   .comment {
   	width: 200px;
   	height: 50px;
   }
  </style>
</head>
<h2>Comment</h2>
<body>
<?php
$com = "SELECT * FROM comment";
$com_result = mysqli_query ($link, $com);
while ($comm= mysqli_fetch_array($com_result)) {
 	echo "<br>" . "$comm[name]" . "<br>";
  	echo "$comm[text]". "<br>" . "<br>";
 } 
?>
<h3>Add new comment</h3>
<form name="Add comment" method="post" action="add.php">
<input type="text" name="name" placeholder="Name" class="name">
<br>
<br>
<input type="text" name="text" placeholder="Comment text" class="comment">
<p><input type="submit" value="Add comment"></p>
</form>

</body>
</html>