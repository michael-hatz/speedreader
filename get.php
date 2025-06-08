<?php
// filepath: get.php
$filename = basename($_GET["file"]);
echo file_get_contents("uploads/" . $filename);
?>