<?php
ini_set( "display_errors", true );
define( "HOST", "localhost" );
//nama database
define( "DATABASE_NAME", "knnmotor" );
define( "DB_USERNAME", "root" );
//password mysql
define( "DB_PASSWORD", "" );
//dir admin
define( "DIR_ADMIN", "motor_knn/");
//main directory
define( "DIR_MAIN", "motor_knn/");

define('DB_CHARACSET', 'utf8');

require_once ('Database.php');
require_once ('url.php');


$db=new Database();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );


?>
