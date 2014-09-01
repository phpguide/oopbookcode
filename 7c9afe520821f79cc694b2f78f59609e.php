$x->nonExistent = 10; // __set()
echo $x->nonExistent; // __get()
if (isset($x->nonExistent)); // __isset()
unset($x->nonExistent); // __unset()