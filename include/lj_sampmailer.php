<?php

/*
 * Author: lexjusto | Link: https://github.com/lexjusto/lj_sampmailer
 * Simple handler for HTML-formatted email messages from the SAMP-SERVER
 * Version 1.0
*/

class lj_sampmailer
{
    private static $config;

    public static function load()
    {
        self::$config = include_once(PATH . 'config/config.php');
    }

    public static function display()
    {
        if (isset($_GET['password']) && $_GET['password'] == self::$config['password'])
        {
            if( isset($_GET['to_email']) && !empty($_GET['to_email']) &&
            isset($_GET['to_name']) && !empty($_GET['to_name']) &&
            isset($_GET['from_email']) && !empty($_GET['from_email'] &&
            isset($_GET['from_name']) && !empty($_GET['from_name']) &&
            isset($_GET['title']) && !empty($_GET['title']) &&
            isset($_GET['body']) && !empty($_GET['body']) &&
            isset($_GET['about']) && !empty($_GET['about']) &&
            isset($_GET['template']) && !empty($_GET['template'])))
            {

                $format_message = self::fillTemplate(array("{title}" => $_GET['title'], "{body}" => $_GET['body'], "{about}" => $_GET['about']), $template);
                self::sendEmail($_GET['to_email'], $_GET['to_name'], $_GET['from_email'], $_GET['from_name'], $_GET['title'], $format_message);

                echo 'format_message: <br>';
               	echo $format_message;
            }
            else
            {
                http_response_code(400);
                echo 'Error! Not all variables in the query were found!';
            }
        }
        else
        {
            http_response_code(403);
            die('Error! Access denied!');
        }
    }


    private static function sendEmail($to_email, $to_name, $from_email, $from_name, $title, $message)
    {
        $eol="\r\n";

        $headers  = "MIME-Version: 1.0".$eol;
        $headers .= "Content-type: text/html; charset=utf-8".$eol;
        $headers .= "X-Mailer: PHP v".phpversion().$eol;

        $headers .= "To: ".$to_name." <".$to_email.">".$eol;
        $headers .= "From: ".$from_name." <".$from_email.">".$eol;

        mail("", $title, $message, $headers); 
    }


    private static function fillTemplate($templateVars = [], $templateName = null)
    {
        if (!$templateName) {
            $templateName = 'default';
        }

        $templateURL = PATH . 'templates/'.$templateName.'/index.html';

        $template = file_get_contents($templateURL);

        if (count($templateVars)) {
            foreach ($templateVars as $key => $value) {  
                $template = strtr($template, array(
                $key => $value,
                ));
            }
        }

        return $template;
    }
}

?>