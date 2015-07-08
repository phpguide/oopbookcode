class PlayElement
{
	public $strongerThan;
}

$rock = new PlayElement();
$paper = new PlayElement();
$scissors = new PlayElement();

$rock->strongerThan = $scissors;
$paper->strongerThan = $rock;
$scissors->strongerThan = $paper;

if($rock->strongerThan->strongerThan->strongerThan === $rock)
	echo 'oh yeah;'