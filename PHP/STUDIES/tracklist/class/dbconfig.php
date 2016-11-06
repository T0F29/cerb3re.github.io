<?php
define('SQL_INIT', 'mysql:host=localhost; dbname=AFPA');
//database Username
define('SQL_USERNAME', 'root');
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
?>
<?php
class Database
{
    private $host = "localhost";
    private $db_name = "afpa";
    private $username = "root";
    private $password = "";
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
