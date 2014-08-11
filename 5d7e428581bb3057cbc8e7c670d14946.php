namespace One {
    const FOO = 42;
    function bar($param) { echo $param, ' in ',  __FUNCTION__; }
}

namespace Two {
    use const \One\FOO;
    use function \One\bar;

    func(FOO); // 42 in \One\bar
}