class MyClass
{
	public function __destruct() {
		echo "Oh, I'm dying.";
	}
}

new MyClass();