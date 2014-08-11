class User
{
    /** @var string */
    public $mail;

    /** @var int */
    public $totalVisits;

    /** @var bool */
    public $isOnline;

    /** @var User */
    public $bestFriend;
}

$dani = new User();
$dani->mail = "Dani@example.com";
$dani->isOnline = false;

$dafna = new User();
$dafna->mail = "Dafni@example";
$dafna->totalVisits = 7;
$dafna->bestFriend = $dani;

$dafna->mail .= ".com";

if ($dani->isOnline)
    $dani->totalVisits++;

foreach([$dani, $dafna] as $user)
{
    /** @var User $user */

    $user->totalVisits++;
    $prefix = $user->isOnline ? 'on' : 'off';
    $bestFriend =
        $user->bestFriend !== null
        ? $user->bestFriend->mail
        : 'nobody';

    echo $user->mail , ' has visited us ', $user->totalVisits, ' times.';
    echo 'Now he is ', $prefix, "line, and his best friend is ", $bestFriend, ".\r\n";
}