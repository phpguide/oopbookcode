trait Foo
{
    public $different = false;
    public $same = true;
}

class Bar
{
    use Foo;

    public $different = true; // Fatal error
    public $same = true; // An error too: E_STRICT (Strict Standards)
}