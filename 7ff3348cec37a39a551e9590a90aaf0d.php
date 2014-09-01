class Hello
{
    public function sayHello() {
        echo 'Hello!';
    }
}

trait HelloWorld
{
    public function sayHello() {
        echo 'Hello, world!';
    }
}

class MyHelloWorld extends Hello
{
    use HelloWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

// Results in:
// Hello, world!