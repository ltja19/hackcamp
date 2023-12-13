<?php

$view = new stdClass();
$view->pageTitle = 'AWS';
if(isset($_GET['AWSRegion'])){
    echo($_GET['AWSRegion']);
}
require_once('Views/aws.phtml');