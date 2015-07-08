//$iterator = new ClassThatImplementsIterator();

$iterator->rewind();
while($iterator->valid())
{
	$key = $iterator->key();
	$value = $iterator->current();
	// ...
	$iterator->next();
}