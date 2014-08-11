class AuthorizedUser implements IUser
{
    const LAST_PAGE_SESSION_KEY = 'lastPage';

    private $session;

    public function getLastVisitedPage()
    {
        return $this->session->get(self::LAST_PAGE_SESSION_KEY);
    }

    public function setLastVisitedPage($page)
    {
        $this->session->set(self::LAST_PAGE_SESSION_KEY, $page);
    }

    // ... Methods for authorized users ...
}

class GuestUser implements IUser
{
    const LAST_PAGE_SESSION_KEY = 'lastPage';

    private $session;

    public function getLastVisitedPage()
    {
        return $this->session->get(self:: LAST_PAGE_SESSION_KEY);
    }

    public function setLastVisitedPage($page)
    {
        $this->session->set(self::LAST_PAGE_SESSION_KEY, $page);
    }

    // ... Methods for guest users ...
}