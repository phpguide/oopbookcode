$bestFriend = $dafna->bestFriend;
$isSameDani = ($dani === $bestFriend); // = true
if ($isSameDani)
    echo "Yes, it is the same Dani.\r\n";

$bestFriend->mail = 'new mail';
echo $dani->mail; // = new mail