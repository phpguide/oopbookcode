class Airport
{
    /**
     * Sends to Gonolulu an object that can fly
     * @param IFlyable $objectThatCanFly
     * @return void
     */
    public function sendToGonolulu(IFlyable $objectThatCanFly) {
        $objectThatCanFly->fly(123);
    }
}