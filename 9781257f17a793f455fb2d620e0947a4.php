class Book
{
	public $title;
	public $author;
	
	public function __toString()
	{
		return "Book:
				[
					Title: ".$this->title."
					Author:".$this->author."
				]";
	}
}