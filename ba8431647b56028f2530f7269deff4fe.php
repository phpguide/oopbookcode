class PasswordAuthProvider implements IAuthProvider
{

    /** @var IUserRepository */
    private $userRepository;

    /**
     * Authenitacation based on a username and a password
     * @param IUserRepository $userRepository Where to look for users
     * @throws InvalidArgumentException
     */
    public function __construct(IUserRepository $userRepository)
    {
        if (null === $userRepository)
            throw new InvalidArgumentException("Repository is null");

        $this->userRepository = $userRepository;
    }


    /**
     * Checks the authentication data
     * @param string $email User's email
     * @param string $pass User's password
     * @return bool Authentication status
     */
    public function authenticate($email, $pass)
    {
        $user = $this->userRepository->find($email);

        if (null !== $user && $user->password === $pass)
            return true;
    }
}