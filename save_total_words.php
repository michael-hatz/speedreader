<?php
if (!file_exists("progress")) mkdir("progress", 0777, true);
$user = "default"; // You can use a user system or session if needed
$total = isset($_POST["total"]) ? intval($_POST["total"]) : 0;
file_put_contents("progress/total_words_" . $user . ".json", json_encode([
    "total_words_read" => $total
]));
echo json_encode(["status" => "saved"]);
?>