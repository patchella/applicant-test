<?php
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  }
  
  switch($action){
	  case 'home':
	  if($controller == 'newCustomer'){
	  $pagetitle = 'New Customer';
	  }
	  else{
		  $pagetitle = 'Home';
	  }
	  break;
	  case 'insertCustomer':
	  $pagetitle = 'Edit Customer'; // I abhor this logic (and using only index.php on what really should be separate pages), but it is not worth rewriting an entire fake website.  Also, delete results in the exact same url as edit!?!
	  break;
	  case 'customerList':
	  case 'updateCustomer':
	  $pagetitle = 'View Customers';
	  break;
	  default:
	  $pagetitle = 'Summer Breeze';
  }
  require_once('views/layout.php');
?>