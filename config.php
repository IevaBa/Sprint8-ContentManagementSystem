<?php

ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Vilnius" ); //timezone for publicationDate
define( "DB_DSN", "mysql:host=localhost;dbname=CMS" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "1234" );
define( "CLASS_PATH", "classes" );    
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "TEMPLATE_PATH", "templates" );      
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem connecting to database occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>