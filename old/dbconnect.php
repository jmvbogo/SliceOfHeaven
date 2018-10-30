<?php
/**
 * Function to extablish a databse connection
 * 
 * @return PDO Object
 */  
function getDatabase() {
    $config = array(
        'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=capstone',
        'DB_USER' => 'root',
        'DB_PASSWORD' => ''
    );

   
        /* Create a Database connection and 
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   

    return $db;
}
