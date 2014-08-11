class Shop
{
    public function __call($name, $params)
    {
        return "Sorry, can't do $name.";
    }
}

$shop = new Shop();
echo $shop->strangeThings(); // Sorry, can't do strangeThings.