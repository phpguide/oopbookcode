class Shop
{
    public static function __callStatic($name, $params)
    {
        return "Sorry, can't do $name with {$params[0]}.";
    }
}

echo Shop::strangeThings('this stuff'); 
// Sorry, can't do strangeThings with this stuff.