/** @param int */
function test1($var)
{
    $var++;
}

$a = 1;
test1($a);
echo $a; // still 1

/** @param User */
function test2($user)
{
    $user->mail = 'changed';
}

$dani = new User();
$dani->mail = 'original';
test2($dani);
echo $dani->mail; // 'changed'