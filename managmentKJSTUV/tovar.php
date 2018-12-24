<?php
    $file = file_get_contents("managmentKJSTUV/conf.json");
    $decode = json_decode($file, true);

    extract($decode);

?>
