<?php
// filepath: get_progress.php
$filename = basename($_GET["file"]);
$file = "progress/" . $filename . ".json";
if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo json_encode(["words_read" => 0]);
}
?>