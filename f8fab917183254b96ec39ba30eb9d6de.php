$a = new User();
$b = $a;
$a->Name = "Boo";
echo $b->Name; // Boo