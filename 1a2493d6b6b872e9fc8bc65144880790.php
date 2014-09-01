class Authentication
{
    /**
     * @param string $email
     * @param string $pass
     * @return bool
     */
    public function login($email, $pass) { ... }

    /**
     * @param string $email
     * @param string $pass
     * @return void
     */
    public function register($email, $pass) { ... }

    /**
     * @param string $email
     * @return void
     */
    public function recoverPassword($email) { ... }
}