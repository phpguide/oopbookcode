trait World
{
    /** Returns World string
     * @return string
     */
    public function sayWorld() {
        return 'world!';
    }
}

class Hello {

    use World;  // using the trait

    public function sayIt() {
        return 'Hello, ' . $this->sayWorld();
    }
}


$hello = new Hello();
echo $hello->sayIt();  // Hello, world!