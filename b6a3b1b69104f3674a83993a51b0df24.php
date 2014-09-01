class Book
{
	public $title;

	public static function __set_state(array $allProperties)
	{
		$obj = new Book;
		$obj->title = $allProperties['title'];
		return $obj;
	}
}