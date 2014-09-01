class Book
{
  public $author = 'Alexander Raskin';
  public $title = 'OOP in PHP from Scratch';
  private $isGood = true;
}

echo serialize(new Book());