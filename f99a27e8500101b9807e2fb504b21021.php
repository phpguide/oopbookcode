class Book
{
	public $author = 'Alexander Raskin';
	public $title = 'OOP in PHP from Scratch';
	private $isGood = true;
	
	public function __sleep()
	{
		return ['title'];
	}
}

echo serialize(new Book());