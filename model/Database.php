<?php


class Database {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "project";

    public function connectToDB()
    {
        $link = mysqli_connect($this->server, $this->username, $this->password, $this->dbname);
        if ($link)
          {  

             
                return $link;
          }
        else {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        

            return false;
        }
    }

}
class  DbConnection {
    
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="project"; 
    private  $database_connection; // 
    private static $instance;
public  static $Counter=0;


  
    private function __construct() {
      $this->database_connection = $this->database_connect($this->host, $this->username,$this->password);
     self::$Counter++;
      
    }
    public static function getInstance(){
        if(self::$instance==null){
          echo "Return New Instance";
          echo self::$Counter;
          echo "<br>";
            self::$instance=new DbConnection();
        }
        else 
        {
          echo "Object is their <br>";
          

        }
        return self::$instance;
    }
     private function database_connect($database_host, $database_username, $database_password) {
       
      if ($connection = mysqli_connect("localhost", "root", "")){
             mysqli_select_db($connection,"project");
            return $connection;
            
        } else {
                die("Database connection error");
            
        }
    }
       
    private function database_select($database_name) {
      
        return mysqli_select_db( $this->database_connection,$database_name)
            or die("No database is selecteted");
        
    }
}

/*
for ($i=0;$i<100;$i++)
{
  
  $con = mysqli_connect("localhost", "root", "");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysqli_select_db($con,"project");

}
*/
?>
