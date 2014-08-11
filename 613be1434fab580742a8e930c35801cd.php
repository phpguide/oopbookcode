class ItemStorage
{
    /** @var string Location address */
    public $address;

    /** @var Item[] List of items at the location */
    public $items = [];

    /**
     * Adds item to the location
     * @param Item $item
     */
    public function addItem($item) { ... }
}

class Shop extends ItemStorage
{
    /** @var Int Shop's public phone number */
    public $phoneNumber;

    /** Some action only Shop has */
    public function washTheFloor() { ... }
}

class StoreHouse extends ItemStorage
{
    /** @var int Note the name ends with *Count*, so it's clear it's an Integer */
    public $entrancesCount;

    /** Some method only StoreHouse has
     * @param Track $track
     */
    public function unloadTrack($track) { ... }
}