$user1 = new User();
$user1->mail = 'abc';
$user2 = $user1;
$user2->mail = 'xyz';
echo $user1->mail; // xyz