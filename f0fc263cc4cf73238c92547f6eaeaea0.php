class WeirdClass
{
	public function __invoke($x)
	{
		echo $x;
	}
}

$x= new WeirdClass();
$x('hi');