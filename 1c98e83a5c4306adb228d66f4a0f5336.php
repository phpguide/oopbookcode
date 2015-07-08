class Node
{
	public $value;
	public $next;
}

class OrderedList 
{
	protected $firstNodeInList = null;

	public function add($newValue)
	{
		// For simplicity, put the new node always at the beginning
        $newNode = new Node();
        $newNode -> value = $newValue;
        $newNode -> next = $this->firstNodeInList;
        $this->firstNodeInList = $newNode;

	}
	
	public function GetIterator()
	{
		$iterator = new ListIterator();
		$iterator->firstNodeInList = $this->firstNodeInList;
		return $iterator;
	}
}

	
	
class ListIterator implements Iterator
{
	
	public $firstNodeInList = null;
	
	private $cursor;
	private $cursorPositionCounter = 0;

	public function rewind()
	{
		$this->cursorPositionCounter = 0;
		$this->cursor = $this->firstNodeInList;
	}
	
	public function key()
	{
		return $this->cursorPositionCounter;
	}
	
	public function current()
	{
		return $this->cursor->value;
	}
	
	public function next()
	{
		$this->cursorPositionCounter++;
		$this->cursor = $this->cursor->next;
	}
	
	public function valid()
	{
		return $this->cursor != null;
	}	
}


$list = new OrderedList();
$list->add(1);
$list->add(2);
$list->add(3);

foreach($list->GetIterator() as $k1 => $v1)
{
	echo $k1, "($v1)", PHP_EOL;
	
	foreach($list->GetIterator() as $k2 => $v2)
		echo "\t", $k2, ' ', $v2, PHP_EOL; 
}