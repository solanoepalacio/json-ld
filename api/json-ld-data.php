<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: text/plain; charset=UTF-8");


    http_response_code(200);
    $ld_data = file_get_contents('assets/json-ld.txt');
    echo $ld_data;
?>
