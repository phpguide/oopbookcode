class Father
{
    private $varMyOwn = 50;
    protected $varMineAndMyDescendants = 150;
    public $varEveryones = 250;
}

class Child extends Father
{
    public function myOwn() {
        return $this->varMyOwn;
    }

    public function mineAndMyDescendants() {
        return $this->varMineAndMyDescendants;
    }

    public function everyones() {
        return $this->varEveryones;
    }
}

$child = new Child();

/* 1 */ echo $child->myOwn(); // error 1
/* 2 */ echo $child->mineAndMyDescendants(); // good, = 150
/* 3 */ echo $child->everyones(); // good, = 250
/* 4 */ echo $child->varMyOwn; // error 2
/* 5 */ echo $child->varMineAndMyDescendants; // error 3
/* 6 */ echo $child->varEveryones; // good, = 250