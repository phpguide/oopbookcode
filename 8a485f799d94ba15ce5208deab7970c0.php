class Father
{
	final public function NoArguments(){}
}

class Child extends Father
{
	public function NoArguments() {
		return "But... ";
	}

  // Fatal error: Cannot override final method Father::NoArguments()
}