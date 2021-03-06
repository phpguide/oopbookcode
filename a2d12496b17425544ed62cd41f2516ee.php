class Dictionary
{
	private $dictionary = [];
	
	public function __set($var, $value)
	{
		$this->dictionary[$var] = $value;
	}
	
	public function __get($var)
	{
		return $this->dictionary[$var];
	}
	
	public function __isset($var)
	{
		return isset($this->dictionary[$var]);
	}
	
	public function __unset($var)
	{
		unset($this->dictionary[$var]);
	}
}

$dictionary = new Dictionary();
$dictionary->bus = "אוטובוס";
echo $dictionary->bus; // אוטובוס
var_export(isset($dictionary->table)); // false