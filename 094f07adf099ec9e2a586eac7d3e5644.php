class FlightTransportation
{
	public function __construct(IFlyable $flyingObject) { ... }
}

$superman = new Superman();
$x = new MyClass($superman);