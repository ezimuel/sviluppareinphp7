<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
    	 // This error code is not included in error_reporting
    	 return;
    }

    printf(
        "%s\nError num: %d\nMessage: %s\nFile: %s\nLine: %d\n",
     	date("d-m-Y h:i:s"),
     	$errno,
     	$errstr,
     	$errfile,
     	$errline
    );

    // Halt the execution in case of E_USER_ERROR
    if (in_array($errno, [ E_USER_ERROR, E_USER_WARNING, E_ERROR, E_WARNING ])) {
		 exit(1);
     }

     /* Don't execute PHP internal error handler */
     return true;
}

$oldHandler = set_error_handler("myErrorHandler");
$a = 0;
echo 1/$a;
echo "Never executed!";
