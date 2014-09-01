trait HelloWorld
{
    public function sayHello() {
        echo 'Hello, world!';
    }
}

class TheWorldIsNotEnough
{
    use HelloWorld;

    public function sayHello() {
        echo 'Hello, universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();

// Results in:
// Hello, universe!