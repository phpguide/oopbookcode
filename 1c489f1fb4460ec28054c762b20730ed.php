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

    /** @var \PDO */
    private $db;

    public function __construct(\PDO $dbconn)
    {
        $this->db = $dbconn;
    }

    /** @return User[] */
    public function GetAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "\\PHPGuide\\User") || [];
    }

    /**
     * @return User
     * @param int $id User id
     */
    public function GetUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject("\\PHPGuide\\User") || null;
    }

    /**
     * @param User $user
     * @throws \InvalidArgumentException
     * @throws \UnexpectedValueException
     */
    public function AddUser(User $user)
    {
        if ($user->id === null)
            throw new \UnexpectedValueException("User id cannot be null");

        if ($this->GetUserById($user->id) !== null)
            throw new \InvalidArgumentException("User with id {$user->id} already exists");

        $stmt = $this->db->prepare("INSERT INTO users VALUES (:id, :name, :pass)");
        $stmt->execute(['id' => $user->id, 'name' => $user->name, 'pass' => $user->pass]);
    }
}

$repo = new UserRepo(new \PDO());
$user = new User();
$user->id = 123;
$repo->AddUser($user);
var_dump($repo->GetAllUsers());
var_dump($repo->GetUserById(123));