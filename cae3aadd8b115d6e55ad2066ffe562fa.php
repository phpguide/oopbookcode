interface IDictionary
{
	function set($key, $val);
	function get($key);
}

class Dictionary implements IDictionary
{
	private $dictionary;
	
	public function set($var, $value)
	{
		$this->dictionary[$var] = $value;
	}
	
	public function get($var)
	{
		return $this->dictionary[$var];
	}
}

$dictionary = new Dictionary();
$dictionary->set('bus', "אוטובוס");
echo $dictionary->get('bus');