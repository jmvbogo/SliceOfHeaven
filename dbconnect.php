<?php
/**
 * Function to extablish a databse connection
 * 
 * @return PDO Object
 */  
function getDatabase() {
    $config = array(
        'DB_DNS' => 'mysql:host=localhost;port=5500;dbname=se265sum17group4',
        'DB_USER' => 'se265sum17group4',
        'DB_PASSWORD' => 'se265'
    );

   
        /* Create a Database connection and 
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   

    return $db;
}

?>