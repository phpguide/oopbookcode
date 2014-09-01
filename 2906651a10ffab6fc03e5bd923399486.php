class Foo
{
	private $bar = 0;
	
	private function cantTouchThis_LaLaLaLa() {
		$this->bar++;
	}
	
	public function ICanTouchThis() {
		$this->cantTouchThis_LaLaLaLa();
	}
}

$foo = new Foo();
$foo->bar++; // error 1
$foo->cantTouchThis_LaLaLaLa(); // error 2
$foo->ICanTouchThis(); // ok