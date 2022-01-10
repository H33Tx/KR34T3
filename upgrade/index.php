<?php

$latest = file_get_contents("https://cdn.henai.eu/KR34T3/version.txt");
$current = file_get_contents("../version.txt");
if(empty($current)) {
    $current = file_get_contents("version.txt");
}
$notes = file_get_contents("https://cdn.henai.eu/KR34T3/versions/$latest/notes.txt");
if(empty($notes)) {
    $notes = "There are none, you can proceed as usual.";
}
$changelog = file_get_contents("https://cdn.henai.eu/KR34T3/versions/$latest/changelog.txt");

if($current===$latest) {
    die("<p><b style='color:green'>Your System is up-to-date!</b> (Local: <span style='color:red'>$current</span>, Latest: <span style='color:green'>$latest</span>)</p><hr><p>&copy; 2021-2022 Project H33T x HENAI.eu</p>");
}

if(empty($latest)) {
    die("<p>Something went wrong. Is HENAI.eu offline? Are you online?</p><hr><p>&copy; 2021-2022 Project H33T x HENAI.eu</p>");
}

if($current!==$latest) {
    die("<p style='color:red'><b>Seems like you're running a Version that is not the official latest.</b></p><p>Local Version is <span style='color:red'>$current</span> and latest Version is <span style='color:green'>$latest</span>. Doesn't match, see?</p><hr><p>Download latest version here: <a href='https://cdn.henai.eu/KR34T3/versions/$latest/KR34T3-$latest.zip' target='_blank'>https://cdn.henai.eu/KR34T3/versions/$latest/KR34T3-$latest.zip</a></p><p><u>Important Notes:</u></p><pre>$notes</pre><hr><p><i>Don't know how to upgrade? <a href='https://wiki.henai.eu/index.php/Software/KR34T3' target='_blank'>Read the Wiki!</a></i></p><p><u>Changelog:</u></p><pre>$changelog</pre><hr><p>&copy; 2021-2022 Project H33T x HENAI.eu</p>");
}

?>
