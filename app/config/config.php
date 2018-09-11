<?php

$config['SITE_URL'] = 'research_management';

$config['SITE_ASSETS'] = $config['SITE_URL'].'assets/';
$config['SITE_PATH'] = $_SERVER['DOCUMENT_ROOT'].'/research_management/';



//DATABASE CONFIGURATION
$config['DB_HOST'] = 'bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$config['DB_USER'] = 'myq80cjjev0e25la';
$config['DB_PASS'] = 'fy8c9r9z31or4r9u';
$config['DB_NAME'] = 'jkfxakqn6fuo9k1v';


//EMAIL CONFIGURATION



foreach ($config as $key => $value) {
	define($key, $value);
}  
