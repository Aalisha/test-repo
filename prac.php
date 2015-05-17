<?php
$session_start();
?>

<html>
<head>
<title>
This is a practice page to learn sessions
</title>
</head>

<body>

<form action="" method="GET">
Username<br>
<input type="text" name="u_name" ><br>
Password<br>
<input type="password" name ="pass">
<input type="submit">
<?php
 $_SESSION['u_name']=@$_GET['u_name'];
 $_SESSION['pass']=@$_GET['pass'];
echo $_SESSION['u_name'];
echo $_SESSION['pass'];
?>
</form>
</body>
</html>

