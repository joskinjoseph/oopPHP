<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//PDO........ PHP Data Object

require_once 'includes/config.php';
require_once 'includes/database.php';
?>

<?php

$object = new Database;
echo $object->connect(); 

?>