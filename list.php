<?php
// filepath: list.php
$files = array_values(array_diff(scandir("uploads"), array('.', '..')));
echo json_encode($files);
?>