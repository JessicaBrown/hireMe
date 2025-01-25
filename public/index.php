<?php
//changed root on PHP Server by running
// php -S localhost:1999 -t public 
// and moving index.php into the public folder
//

require '../helpers.php';
//loadView('home');



$uri = $_SERVER['REQUEST_URI'];

require basePath('/router.php');
