<html>
<head>
<title> My page </title>
</head>
<body>
<?php
	

	if(isset($_POST['submit']))
	{
		if($_POST["username"]=="" || ($_POST["password"])=="")
		{
		 echo ("empty");
		}
		else if(strlen($_POST["password"])>10)
		 {
		  echo ("Error");
		 }
		else
		{
		 header("location: Done.php");
		}

	}

?>

<form action="DisplayAdmin.php" method="post">
<input type="text" name="username"  >
<input type="password" name="password">
<input type="submit" name="submit">
</form>
</body>
</html>