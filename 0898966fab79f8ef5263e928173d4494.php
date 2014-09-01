class ParentClass
{
	public static $counter = 0;
	
	public function __construct()
	{
		static::$counter++;
	}
}

class ChildClass extends ParentClass
{
	public static $counter = 10;
}

new ChildClass(); // +1 to Child
new ParentClass(); // +1 to Parent