class Counter
{
    public static $counter = 0;

    public function __construct()
    {
        Counter::$counter++;
    }
}

echo Counter::$counter; // 0
new Counter();
new Counter();
echo Counter::$counter; // 2