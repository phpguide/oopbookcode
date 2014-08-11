class Father
{
    /**
     * Doing sports
     * @return string
     */
    public function doSport() {
        return 'Playing golf.';
    }
}

class Child extends Father
{
    /**
     * Doing sports
     * @return string
     */
    public function doSport() {
        return 'World of Warcraft is sport, right?';
    }
}

$father = new Father();
echo 'Father: ', $father->doSport(), "\r\n";

$child = new Child();
echo 'Child: ', $child->doSport();