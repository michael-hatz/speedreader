<?php
// filepath: delete.php
$filename = basename($_POST["file"]);
unlink("uploads/" . $filename);
@unlink("progress/" . $filename . ".json");
echo json_encode(["status" => "deleted"]);
?>