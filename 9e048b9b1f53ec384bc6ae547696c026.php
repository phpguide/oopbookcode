class ParentClass
{
	public static $counter = 0;
	
	public function __construct()
	{
		self::$counter++;
	}
}

class ChildClass extends ParentClass
{
	public static $counter = 10;
}

new ChildClass();