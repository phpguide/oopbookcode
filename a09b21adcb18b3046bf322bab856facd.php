abstract class Father
{
	abstract public function doSomething();
}

class Child extends Father {}

// Fatal error: Class Child contains 1 abstract method and must therefore implement the remaining methods (Father::doSomething)