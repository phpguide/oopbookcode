trait Hello
{
	public function sayHello() {
		echo 'Hello ,';
	}
}

trait World
{
	public function sayWorld() {
		echo 'world!';
	}
}

trait HelloWorld
{
	use Hello, World;
}

class MyHelloWorld
{
	use HelloWorld;
}

$obj = new MyHelloWorld();
$obj->sayHello();
$obj->sayWorld();

// Results eventually in:
// Hello, world!