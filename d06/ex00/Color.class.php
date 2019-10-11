#!/usr/bin/php
<?php
Class Color
{
	$red, $green, $blue;
	static $verbose = FALSE;

	Function __construct($tab) {
		if (isset($tab['rgb']))
		{
			$this->red = (intval($tab['rgb']) >> 16) & 0xff;
			$this->green = (intval($tab['rgb']) >> 8) & 0xff;
			$this->blue = intval($tab['rgb']) & 0xff;
			if (Self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		}
		elseif (isset($tab['red']) && isset($tab['green']) && isset($tab['blue']));
		{
			$this->red = intval($tab['red']);
			$this->green = intval($tab['green']);
			$this->blue = intval($tab['blue']);
			if (Self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		}
	}
	Function __destruct() {
		if (Self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}
	Function __toString() {
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )\n", $this->red, $this->green, $this->blue);
);
	}
	static Function doc() {
		return (file_get_contents("Color.doc.txt"));
	}
	Function add($toAdd) {
		return (new Self('red' => ($this->red + $toAdd->red), 'green' => ($this->green + $toAdd->green), 'blue' => ($this->blue + $toAdd->blue)));
	}
	Function sub($toSub) {
		return (new Self('red' => ($toSub->red - $this->red), 'green' => ($toSub->green - $this->green), 'blue' => ($toSub->blue - $this->blue)));
	}
	Function mult($factor) {
		return (new Self('red' => ($this->red * $factor), 'green' => ($this->green * $factor), 'blue' => ($this->blue * $factor)));
	}
}
?>
