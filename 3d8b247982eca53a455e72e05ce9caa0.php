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
        $newNode = new Node();
        $newNode -> value = $newValue;

		if($this->firstNodeInList == null)
		{
			// if it's an empty list 
			// make the new node the only node in our list
			$this->firstNodeInList = $newNode;
		}
		else if($newValue <= $this->firstNodeInList->value)
		{
			// put the new node in the very beginning
			$newNode -> next = $this -> firstNodeInList;
			$this->firstNodeInList = $newNode;
		}
		else
		{
			// move to the next of the next of the next ... 
			// as long as we don't find a node who's value is bigger that ours, so we know we need to insert it there
			// In a list with 2,3,7 we will have to find 3 and 7 and then insert 5 between
			
			$current = $this->firstNodeInList;
			
			while($current->value < $newValue && $current->next != null && $current->next->value < $newValue)
			{
				$current = $current->next;
			}
			
			// for 2,3,7 This loop stops when it hits number 3
			// because 3->value is smaller than 5, 
			// but 3->next->value  which is 7, is bigger than 5
			// therefore $current = 3
			
			$newNode -> next = $current -> next; // Set 5->next to be 7
			$current->next = $newNode; // set 3->next to be 5
			
		}
    }
	
	public function PrintList()
	{
		$node = $this->firstNodeInList;
		while($node != null)
		{
			echo $node->value, ' ';
			$node = $node->next;
		}
	}
}


$list = new OrderedList();
$list->add(10);
$list->add(6);
$list->add(54);
$list->add(12);
$list->add(1);
$list->add(-5);

$list->PrintList();