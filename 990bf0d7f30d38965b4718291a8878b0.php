class X
{
	private $value = 0;
	
	private function CantTouchThis_LaLaLaLa() {
		$this->value++;
	}
	
	public function ICanTouchThis() {
		$this->CantTouchThis_LaLaLaLa();
	}
}

$x = new X();
$x->value++; // error 1
$x->CantTouchThis_LaLaLaLa(); // error 2
$x->ICanTouchThis(); // ok