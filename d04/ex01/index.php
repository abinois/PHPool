<?php
session_start();
if ($_GET['submit'] == "OK") isset($_GET['login']) && isset($_GET['passwd']))
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html>
	<body>
		<form method="get" action="">
			Identifiant: <input type="text" name="login" placeholder="pseudo" value="<?php echo $_SESSION['login'];?>" /><br />
			Mot de passe : <input type="password" name="passwd" placeholder="password" value="<?php echo $_SESSION['passwd'];?>" />
			<input type="submit" name="submit" value="OK" />
		</form>
	</body>
</html>
