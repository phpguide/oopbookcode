namespace One
{
    const FOO = 42;
    function bar($arg) {
        echo $arg, ' in ',  __FUNCTION__;
    }
}

namespace Two
{
    use const One\FOO;
    use function One\bar;

    bar(FOO); // 42 in \One\bar
}