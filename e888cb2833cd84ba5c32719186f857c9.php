class MyClass
{
	public function __toString()
	{
		return 'world!';
	}
}

$instance = new MyClass();

echo 'Hello, ', $instance;
// output: Hello, world!