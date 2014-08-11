class Book
{
	public $title;
	public $author;
	
	public function __construct($title, $author)
	{
		$this->title = $title;
		$this->author = $author;
	}
	
	public function __clone()
	{
		$this->title .= '_copy';
		$this->author .= '_copy';
	}
}

$book1 = new Book("OOP in PHP from Scratch", "Alex Raskin");
$book2 = clone $book1;
echo $book2->title, ' by ', $book2->author;