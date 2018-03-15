<?php
//Cross-origin resource sharing header
//http://localhost:50000/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept");

word_text = $_GET['word_text'];
$links = shell_exec('python executeModel.py $word_text');
echo $links;

?>
