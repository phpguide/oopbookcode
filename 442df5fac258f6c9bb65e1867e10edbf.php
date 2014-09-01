$child = new Child();
/* 1 */ $child->cook();
/* 2 */ echo $child->pizza;
/* 3 */ $child->eat();
/* 4 */ $child->eatMore();
/* 5 */ $child->sleep();

class Father
{
    private $cake = 0;
    protected $pizza = 0;

    private function cook() {
        $this->pizza++;
        $this->cake++;
    }

    public function sleep() {
        $this->cake = $this->pizza = 0;
    }
}

class Child extends Father
{
    protected function eat() {
        $this->pizza--;
    }

    public function eatMore() {
        $this->pizza--;
        $this->cake--;
    }
}