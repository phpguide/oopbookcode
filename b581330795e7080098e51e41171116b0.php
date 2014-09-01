trait One
{
	public function beep() { echo '1 beep'; }

	public function dooo() { echo '1 dooo'; }
}

trait Two
{
	public function beep() { echo '2 beeps';}

	public function dooo() { echo '2 dooos'; }
}

class Car
{
	use One, Two
	{
		One::beep insteadof Two; // use One's beep
		Two::dooo insteadof One; // use Two's dooo

		// Alternative alias for Two's beep
		Two::beep as doubleBeep;
	}
}

$car = new Car();
$car->beep();  // 1 beep from One
$car->dooo();  // 2 dooos from Two
$car->doubleBeep(); // 2 beeps with the alias