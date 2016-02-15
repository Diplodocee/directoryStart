<?php
$to      = 'ludwa.borra@gmail.com'; 
$subject = 'Deliverance database entry';
$title = $_POST['title'];
$artist = $_POST['artist'];
$performed = $_POST['performed'];
$original = $_POST['original'];
$music = $_POST['music'];
$suggester = $_POST['suggester'];
$message = '<b>Thank you for your submission</b>'. "\r\n". "<br>" .
            '<b>Title:</b> '. $title . "\r\n". "<br>" .
            '<b>Artist:</b> '. $artist . "\r\n". "<br>" .
            '<b>Performed:</b> '. $artist . "\r\n". "<br>" .
            '<b>Original:</b> '. $original . "\r\n". "<br>" .
            '<b>Music:</b> '. $pmusic . "\r\n" . "<br>" .
            '<b>Suggester:</b> '. $suggester . "\r\n";
$headers = 'From: ' . 'ludwa.borra@gmail.com' . "\r\n" .
    'Content-type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);

?>
