<?php 
/**
 * PDO Database Class
 * 
 * Connect to database 
 * Create prepared statements
 * Bind values
 * Return rows and results
 */
class Database 
{
    private $host = DB_HOST;
    private $port = DB_PORT;
    private $dbname = DB_NAME;
    private $user = DB_ROOT_USER;
    private $pwd = DB_ROOT_PWD;
    
    private $dbh;
    private $stmt; 
    private $err; 

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true, // Persistent connection - increase performance
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pwd, $options);
        } catch(PDOException $e) {
            $this->err = $e->getMessage();
            echo $this->err;
        }
    }
}