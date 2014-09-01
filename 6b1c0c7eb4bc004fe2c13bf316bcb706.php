abstract class StorageSpace {}

class Garage extends StorageSpace {}

$garage = new Garage();// good

$space = new StorageSpace();  // oooops, no chance