#!/usr/bin/php
<?php
Class Color
{
	$red, $green, $blue;
	static $verbose = TRUE;

	Function __construct($tab) {
		if (isset($tab['rgb']))
			$instance = new Self(array);
		elseif (isset($tab['red']) && isset($tab['green']) && isset($tab['blue']));
			$instance = new Self();
		if (Self::$verbose)
			echo;
	}
	Function __destruct() {
	}
	Function __toString() {
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
