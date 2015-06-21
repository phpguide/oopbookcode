spl_autoload_register('autoloadingFunction');

function autoloadingFunction($structName) {
	echo "Looking for struct $structName";
}

$x = new \Foo\Bar();