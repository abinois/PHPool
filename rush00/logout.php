<?php
Function ft_logout($tab)
{
	if ($tab)
	{
		$tab["loggued_on_user"] = "";
		$tab["loggued_on_pwd"] = "";
		$tab["admin"] = "";
	}
}
?>
