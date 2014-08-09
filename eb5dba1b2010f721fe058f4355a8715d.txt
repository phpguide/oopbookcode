class Superman implements IFlyable {

    /**
     * @param int $speedInKmh Speed in kilometers per hour
     * @return string
     */
    public function fly($speedInKmh) {
        return 'I am flying at ' . $speedInKmh . 'km/h';
    }

}