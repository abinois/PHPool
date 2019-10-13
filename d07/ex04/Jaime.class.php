<?php
Class Jaime
{
	Function sleepWith($princess)
	{
		if ($princess instanceof Sansa)
			echo "Let's do this.\n";
		elseif ($princess instanceof Cercei)
			echo "With pleasure, but only in a tower in Winterfell, them.\n";
		else
			echo "Not event if I'm drunk !\n";
	}
}
?>
