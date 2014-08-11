namespace PHPGuide;

class User
{
    /** @var int id */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $password;
}

interface IUserRepo
{
    /** @return User[] */
    public function GetAllUsers();

    /** @return User
     * @param int $id User id
     */
    public function GetUserById($id);

    /** @param User $user */
    public function AddUser(User $user);
}

class UserRepo implements IUserRepo
{
    /** @var User[] */
    private $users = [];

    /** @return User[] */
    public function GetAllUsers()
    {
        return $this->users;
    }

    /**
     * @return User
     * @param int $id User id
     */
    public function GetUserById($id)
    {
        foreach($this->users as $user)
            if($user->id === $id)
                return $user;

        return null;
    }

    /** @param User $user */
    public function AddUser(User $user)
    {
        if($user->id === null)
            throw new \UnexpectedValueException("User id cannot be null");

        if($this->GetUserById($user->id) !== null)
            throw new \InvalidArgumentException("Duplicate id {$user->id}");

        $this->users[] = $user;
    }
}

/*
$repo = new UserRepo();
$user = new User(); 
$user->id = 123;
$repo->AddUser($user);
var_dump($repo->GetAllUsers());
var_dump($repo->GetUserById(123));
*/