<?php

/**
 * Handling database connection
 *
 * @author Ravi Tamada
 * @link URL Tutorial link
 */
class DbConnect {

    private $conn;

    function __construct() {        
    }

    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {
         include_once 'config.php';
        $host = constant("DB_HOST");
        $username = constant("DB_USERNAME");
        $password= constant("DB_PASSWORD");
        $dbname = constant("DB_NAME");

         $conn = new mysqli($host,$username, $password, $dbname );
         // Check for database connection error
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        // Change character set to utf8
        mysqli_set_charset($conn,constant("DB_CHARSET"));

        // returing connection resource
        return $conn;
    }

}

?>
