class CheckThisOut
{
    /** @var string */
    public $encryptionKey = '...';

    /**
     * Returns current encryption key
     * @return string
     */
    public function GetEncryptionKey()
    {
        return $this->encryptionKey;
    }

    /**
     * Checks whether the passed object is the same as $this
     * @param CheckThisOut $anotherObject
     * @return bool
     */
    public function isSame($anotherObject)
    {
        return $anotherObject === $this;
    }

    /**
     * Compares encryption key of another object with the current one
     * @param CheckThisOut $anotherObject
     * @return bool
     */
    public function hasSameEncryptionKey($anotherObject)
    {
        return $this->encryptionKey === $anotherObject->encryptionKey;
    }
}

$first = new CheckThisOut();
$second = new CheckThisOut();

echo 'first is first? ',   $first->isSame($first),   "\r\n";
echo 'second is second? ', $second->isSame($second), "\r\n";
echo 'first is second? ',  $first->isSame($second),  "\r\n";