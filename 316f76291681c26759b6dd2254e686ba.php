$list = new OrderedList();
$list->add(99);
$list->add(12);
$list->add(37);

foreach($list as $position => $item)
	echo $item; // 12, 37, 99