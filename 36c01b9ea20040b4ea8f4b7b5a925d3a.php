trait Polite
{
	public function hi() {
		echo 'Hi, ', $this->name;
	}

	abstract public function bye();
}

class Guest
{
	use Polite;

	private $name = 'Alex';

	public function bye() {
		echo 'Bye, ', $this->name;
	}
}

$guest = new Guest();
$guest->hi(); // Hi, Alex
$guest->bye(); // Bye, Alex