<?php
// filepath: cut.php
$filename = basename($_POST["file"]);
$text = $_POST["text"];
file_put_contents("uploads/" . $filename, $text);
echo json_encode(["status" => "cut"]);
?>