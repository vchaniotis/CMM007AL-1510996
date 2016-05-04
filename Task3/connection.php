<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 04/05/2016
 * Time: 11:42
 */

define('DB_SERVER', 'us-cdbr-azure-west-c.cloudapp.net');
define('DB_USERNAME', 'bfcc7f13e7221d');
define('DB_PASSWORD', 'ddc020b5');
define('DB_DATABASE', 'CMM007ALDB-1510996');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>