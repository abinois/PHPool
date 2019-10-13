<?php
abstract Class House
{
	abstract Function get_HouseName();
	abstract Function get_HouseSeat();
	abstract Function get_HouseMotto();
	Function introcude()
	{
		printf("House %s of %s : \"%s\"\n",
			$this->get_HouseName(), $this->HouseSeat(), $this->get_HouseMottot);
	}
}
?>
