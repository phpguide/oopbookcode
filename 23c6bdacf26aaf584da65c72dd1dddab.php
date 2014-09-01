class WeirdClass
{
	public function __invoke($foo)
	{
		echo $foo;
	}
}

$bar = new WeirdClass();
$bar('hi');