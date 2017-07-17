<?php
$site_url = 'https://localhost/wishing-widget/';
if(@$_SERVER['HTTP_HOST'] != 'localhost'){
    $site_url = 'https://linkbhejo.com/wishing-widget/';
}
define('SITE_URL',$site_url);