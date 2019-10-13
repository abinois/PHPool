<?php
Class UnholyFactory
{
	private $factory = array();
	Function absorb($fighter_obj)
	{
		if (get_parent_class($fighter_obj) == "Fighter")
		{
			$fighter_name = $fighter_obj->name;
			if (isset($this->factory[$fighter_name]))
				echo "(Factory already absorbed a fighter of type $fighter_name)\n";
			else
			{
				$this->factory[$fighter_name] = $fighter_obj;
				echo "(Factory absorbed a fighter of type $fighter_name)\n";
			}
			return;
		}
		echo "(Factory can't absorb this, it's not a fighter)\n";
	}
	Function fabricate($fighter_name)
	{
		if (isset($this->factory[$fighter_name]))
		{
			echo "(Factory fabricates a fighter of type $fighter_name)\n";
			return ($this->factory[$fighter_name]);
		}
		echo "(Factory hasn't absorbed any fighter of type $fighter_name)\n";
		return (NULL);
	}
}
?>
