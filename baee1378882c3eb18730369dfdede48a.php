$x->doesntExist = 10; // __set()
echo $x->doesntExist; // __get()
if (isset($x->doesntExist)); // __isset()
unset($x->doesntExist); // __unset()