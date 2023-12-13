<?php

$view = new stdClass();
$view->pageTitle = '';
$json_data = file_get_contents('mockData.json');
$data=json_decode($json_data, true);
echo '<script>';
echo 'var jsonData = ' . $json_data . ';'; // This makes the JSON data accessible in JavaScript
echo '</script>';
//var_dump($data['footprint']);
//var_dump($data['emissions']);

//$dataValue = implode(".", $data['emissions']);
//echo $dataValue."<br>";
//print_r($data['emissions']);
require_once('Views/jsonDecode.phtml');
