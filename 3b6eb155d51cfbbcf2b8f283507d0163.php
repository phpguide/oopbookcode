spl_autoload_register('autoloadingFunction');

function autoloadingFunction($typeName) {
	echo "Looking for type $typeName";
}

$x = new \Foo\Bar();