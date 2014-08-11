class Father
{
    private $varMyOwn = 50;
    protected $varMyAndMySons = 150;
    public $varEveryones = 250;
}

class Child extends Father
{
    public function MyOwn() {
        return $this->varMyOwn;
    }

    public function MyAndMySons() {
        return $this->varMyAndMySons;
    }

    public function Everyones() {
        return $this->varEveryones;
    }
}

$child = new Child();
echo $child->MyOwn(); // error 1
echo $child->MyAndMySons(); // good, = 150
echo $child->Everyones(); // good, = 250
echo $child->varMyOwn; // error 2
echo $child->varMyAndMySons; // error 3
echo $child->varEveryones; // good, = 250