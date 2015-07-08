$yourClass = new YourClass();
$yourClass->number = 7;
$yourClass->max = 141;

foreach($yourClass->GetIterator() as $int)
	echo $int; // 7, 14, 21, 28, ..., 133, 140