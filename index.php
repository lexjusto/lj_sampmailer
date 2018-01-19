<?php

/*
 * Author: lexjusto | Link: https://github.com/lexjusto/lj_sampmailer
 * Simple handler for HTML-formatted email messages from the SAMP-SERVER
 * Version 1.0
*/

define('PATH', dirname(__FILE__).'/');

include_once(PATH . 'include/lj_sampmailer.php');


lj_sampmailer::load();
lj_sampmailer::display();

?>