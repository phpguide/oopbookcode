class Father
{
    /** @var int Amount of hands */
    public $hands = 2;

    /** @return string */
    public function doSport() {
        return 'hOOPa!';
    }
}

class Child extends Father {}

$child = new Child();
echo "I have ", $child->hands, " hands. \r\n";
echo "I am a child doing sport: ", $child->doSport();