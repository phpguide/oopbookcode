trait Beep
{
	public function beep() {
		echo 'beep'; 
	}
}

trait Drive
{
	public function drive() {
		echo 'whoooom';
	}
}


class LicensedDriver // extends Driver
{
	use Beep, Drive;
}

class SuperCar // extends Car
{
	use Beep, Drive;
}


$licensedDriver = new LicensedDriver();
$licensedDriver->beep(); // beep
$licensedDriver->drive(); // whoooom

$superCar = new SuperCar();
$superCar->beep(); // beep
$superCar->drive(); // whooom