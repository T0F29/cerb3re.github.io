<?php
// just a test
define('SQL_INIT', 'mysql:host=localhost; dbname=AFPA');
//database Username
define('SQL_USERNAME', 'test');
//database Password
define('SQL_PASSWORD', '');

/* Website Definition */
// Website name
define('WBS_NAME', 'Track List');
try
{
  $sql = new PDO(SQL_INIT, SQL_USERNAME, SQL_PASSWORD);
}
catch(PDOException $e)
{
  echo 'Error: ' . $e->getMessage();
}
// endOf: Just a test
?>
<?php
class Database
{
    private $host = "YOUR_HOST";
    private $db_name = "YOUR_DATABASE";
    private $username = "YOUR_USERNAME_DATABASE";
    private $password = "YOUR_PASSWORD_DATABASE";
    public  $conn;

    public function dbConnection()
	{

	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
