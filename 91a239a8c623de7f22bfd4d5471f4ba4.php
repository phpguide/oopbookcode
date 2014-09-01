class Father
{
	final public function noArguments() {}
}

class Child extends Father
{
	public function noArguments()
	{
		return "But...";
	}
  // Fatal error: Cannot override final method Father::noArguments()
}