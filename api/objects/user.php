Contains properties and methods for “user” database queries

<?php
class User
{

    // database connection and table name
    private $conn;
    private $table_name = 'users';

    // object properties
    public $id;
    public $username;
    public $password;
    public $created;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // signup user
    function signup()
    {

    }

    // login user
    function login()
    {

    }

    // a function to check if username already exists
    function isAlreadyExist()
    {

    }
}
?>