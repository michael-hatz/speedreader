<?php
// filepath: save_progress.php
if (!file_exists("progress")) mkdir("progress", 0777, true);
$filename = basename($_POST["file"]);
$progress = isset($_POST["progress"]) ? $_POST["progress"] : 0;
$remaining_text = isset($_POST["remaining_text"]) ? $_POST["remaining_text"] : "";

file_put_contents("progress/" . $filename . ".json", json_encode([
    "words_read" => $progress,
    "remaining_text" => $remaining_text
]));

echo json_encode(["status" => "saved"]);
?>