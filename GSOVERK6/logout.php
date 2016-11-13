<?php
session_start(); 
 $_SESSION = [];		// empty the $_SESSION array
		// invalidate the session cookie
			// Skýring: notar fallið session_name() til að núllstilla session cookie 
			// expire -24 klst, /  gildir fyrir allt domain.
	    if (isset($_COOKIE[session_name()])) {
	      setcookie(session_name(), '', time()-864000, '/');   
	    }
	    session_destroy();

 header('Location: http://tsuts.tskoli.is/2T/1810943469/GSOVERK6/');
 exit();

?>