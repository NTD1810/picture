<?php
header('Content-disposition: attachment; filename=game_log.txt');
function readLogFile($username) {
    $filename = "/tmp/game_saved/$username";
    readfile($filename);
}

// Use the function to read the log file
readLogFile($_GET['username']);
?>