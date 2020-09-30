<?php

/**
 * Database Class
 * Web-App Framework
 *
 ***/

class Database
{

  /**
   * @var object $db_connection The database connection for each db
   */
  public $user_db_connection = NULL; // connection for user data

  /**
   * @var object $db_status The database connection status for each db
   */
  public $user_db_status = NULL; // status of user data connection

  // TODO: can be used to import configuration files or PDO class.
  public function __construct()
  {}

  // userDatabase creates a connection to the database that stores user data and credentials.
  public function userDatabase()
  {
    // Check if the database is loaded already
    if($this->user_db_connection != NULL){
        $this->user_db_status = true;
    }else{
      // Create a database connection, using the constants from recipe_book/pancake_recipes/database_config.php
      try{
        // Generate a database connection, using the PDO connector using config
        $this->user_db_connection = new PDO(USER_DB_TYPE.':host='. USER_DB_HOST .';dbname='. USER_DB_NAME . ';charset=utf8', USER_DB_USER, USER_DB_PASS);
        $this->user_db_status = true;
        $this->user_db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Log a successful connection to the database
        trigger_error("Notice: Connection to User Database Established.", E_USER_NOTICE);
        // Return the database connection to the main application
        return $this->user_db_connection;
      // If an error is catched, database connection failed
      }catch (PDOException $e){
        trigger_error("Vanilla Pancakes User Database Connection Error: ".$e->getMessage(), E_USER_ERROR);
        $this->user_db_status = false;
        return false;
      }
    }
  }

}

?>
