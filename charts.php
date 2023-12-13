<?php
$view = new stdClass();
$view->pageTitle = '';
$json_data = file_get_contents('mockData.json');
$data=json_decode($json_data, true);
var_dump($data['emissions']);
require_once('views/charts.phtml');