<?php

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
define('DB_HOST','localhost');
define('DB_NAME','klomp');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
//
//define('DB_HOST','localhost');
//define('DB_NAME','myBand');
//define('DB_USERNAME','myBand');
//define('DB_PASSWORD','root1');