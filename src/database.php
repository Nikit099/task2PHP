<?php


require '../vendor/autoload.php';

// $dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
// $dotenv->load();
class Database
{
    private string $host = 'localhost';
    private string $db_name = 'schemaa';
    private string $username = 'root';
    private string $password = 'qwerty123';

    // private string $host = $_ENV ['MYSQL_HOST'];
    // private string $db_name = $_ENV ['DATABASE_NAME'];
    // private string $username = $_ENV ['MYSQL_USER'];
    // private string $password = $_ENV ['MYSQL_PASSWORD'];

    public ?PDO $conn = null;

    public function getConnection(): ?PDO
    {

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            echo $_ENV['MYSQL_HOST'];
            
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

}

// $objectDataBase = new Database;
// $objectDataBase->getConnection();



