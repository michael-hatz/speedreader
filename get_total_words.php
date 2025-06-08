<?php
$user = "default";
$file = "progress/total_words_" . $user . ".json";
if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo json_encode(["total_words_read" => 0]);
}
?>