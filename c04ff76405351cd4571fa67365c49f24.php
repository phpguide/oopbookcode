class Jumper
{
	const UNIT = "meters";
	
	public static function jump($height)
	{
		return "Jumping to $height ". self::UNIT;
	}
}

echo Jumper::jump(3);