class Authentication
{
    /** @var string */
    public $encryptionKey = 'Nb2PjJiK9#H!8@';

    /**
     * @param string $email
     * @param string $pass
     * @return bool
     */
    public function login($email, $pass) {
	    // use encrypt() to validate pass
	}

    /**
     * @param string $email
     * @param string $pass
     * @return void
     */
    public function register($email, $pass) {
	    // use encrypt() to save pw in db
	}
    
    /**
     * @param string $pass
     * @param string $key
     * @return string
     */
    public function encrypt($pass, $key) {
	    // use key to encrypt password
	}
}