<?php
class Targaryen
{
	Function resistsFire() { return (False); }
	Function getBurned() { return ($this->resistsFire() ? "emerges naked but unharmed" : "burns alive"); }
}
?>
