class Node
{
    public $value;
    public $next;
}


class LastInFirstOutList implements Iterator
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



    /////////////////////////////////////
    ////////// Implement Iterator ///////
    /////////////////////////////////////

    private $cursor;
    private $cursorPositionCounter = 0;

    // reset cursor to beginning, so foreach starts from zero
    public function rewind()
    {
        $this->cursorPositionCounter = 0;
        $this->cursor = $this->firstNodeInList;
    }

    // moves the cursor to the next element for the next iteration
    public function next()
    {
        $this->cursorPositionCounter++;
        $this->cursor = $this->cursor->next;
    }

    // Just a counter to count the element position in the list
    public function key()
    {
        return $this->cursorPositionCounter;
    }

    // returns the current element under the cursor
    public function current()
    {
        return $this->cursor->value;
    }

    // Checks weather we reached the end of the list
    public function valid()
    {
        return $this->cursor != null;
    }    
}


$list = new LastInFirstOutList();
$list->add(10);
$list->add(9);
$list->add(8);
$list->add(7);
$list->add(6);
$list->add(5);

foreach($list as $k => $v)
{
    echo $k, ' ', $v, PHP_EOL; // 5, 6, 7, 8, 9, 10
}