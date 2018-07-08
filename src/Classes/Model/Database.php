<?php


namespace App\Classes\Model;
use PDO;
use PDOException;

class Database        //Here we create the DB class and add the attributes..
{
    public $databaseHandler;                   //Create database-handler
    public $host = "localhost";                //The "IP" address..
    public $dbname = "real_estate";   //Name of the database we are going to use
    public $user = "root";                     //Username to connect to the DB
    public $password = "mysql";                //The password

    public function __construct()              //Here is the constructor function
    {
        try {                                  //Validate if the information is correct with the one on the DB
            $this->databaseHandler = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            //echo "Database Connected";
        }
        catch(PDOException $error){
            echo $error->getMessage();         //If one or more variables doesnt match, throw a error..

        }
    }

}