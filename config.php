<?php


  $subfolder ='/test';  
$config= sprintf('%s://%s/', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http'), $_SERVER['HTTP_HOST'].$subfolder); //'http://localhost/matrimony/';
echo $config;

?>