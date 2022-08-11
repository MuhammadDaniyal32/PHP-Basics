<?php

setcookie("test_cookie","test",time()+10, '/');

if(count($_COOKIE)>0)
{
  
  print_r($_COOKIE);
  echo "Cookie are enabled.";	
}
else
{
	print_r($_COOKIE);
	echo "Cookie are disabled.";
	
	}

?>