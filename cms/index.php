<?php 
require_once('config.php');
require_once('templates/header.php');

$module = $_GET['module'];

if(!$module) $module = "studenti";

$action = $_GET['action'];
if (!$action) $action = "read";

require_once('modules/' . $module .'/'.$action.'.inc.php');
?>




<?php 
require_once('templates/footer.php');
 ?>