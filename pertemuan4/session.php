<?php
     	setcookie("user_name", "Guru99", time()+ 60,'/'); // expires after 60 seconds
     	echo 'the cookie has been set for 60 seconds';


     	print_r($_COOKIE);    //output the contents of the cookie array variable 

     	session_start(); //start the PHP_session function 

	if(isset($_SESSION['page_count']))
	{
    	$_SESSION['page_count'] += 1;
	}
	else
	{
    	$_SESSION['page_count'] = 1;
	}
		echo 'You are visitor number ' . $_SESSION['page_count'];

	session_destroy(); //destroy entire session 

	unset($_SESSION['product']); //destroy product session item 

?>