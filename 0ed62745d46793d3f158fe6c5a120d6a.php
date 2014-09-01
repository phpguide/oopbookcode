interface IAuthProvider
{
    /**
     * Returns the user's ID
     * @return int ID of a user
     */
    public function getUserId();
}

class CookieAuthProvider implements IAuthProvider
{
    public function getUserId() {
        // ... read cookie ...
    }
}

class FacebookAuthProvider implements IAuthProvider
{
    public function getUserId() {
        // ... show Facebook login ...
    }
}

class LoginPassAuthProvider implements IAuthProvider
{
    public function getUserId() {
        // ... check in database ...
    }
}