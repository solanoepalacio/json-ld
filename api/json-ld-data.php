<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: text/plain; charset=UTF-8");


    http_response_code(200);
    echo file_get_contents('assets/json-ld.txt');;
?>
