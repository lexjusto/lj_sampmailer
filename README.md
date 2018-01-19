# lj_sampmailer

## Simple handler for HTML-formatted email messages from the SAMP-SERVER

## (RUS):
Простой PHP-обработчик отправки HTML-отформатированных сообщений из сервера SAMP (используя стандартный инклуд - a_http.inc)

Особенности:
* Скрипт получает запросы от SAMP сервера с помощью GET-запроса (стандартный инклуд из пакета с сервером SAMP - a_http)
* Защита доступа к скрипту с помощью пароля (указывается в конфиге)
* Заготовленные шаблоны для отправки (с хранением на стороне PHP-скрипта, присутствует стандартный шаблон - **'default'**)
* GET-параметры которые обрабатывает скрипт:
	- **password** (пароль доступа),
	- **to_email** (email адрес получателя),
	- **to_name** (имя получателя),
	- **from_email** (email адрес отправителя),
	- **from_name** (имя отправителя),
	- **title** (заголовок сообщения, тема письма),
	- **body** (тело письма (html) ),
	- **about** (копирайт внизу письма),
	- **template** (шаблон который будет использован при отправке сообщения, указывается название шаблона в папке - **/templates/**)

## (ENG):

A simple PHP handler for sending HTML-formatted messages from the SAMP server (using the standard include - a_http.inc)

Features:
* The script receives requests from the SAMP server using the GET request (the startup inloud from the SAMP server package - a_ntp)
* Protection of access to the script with a password (specified in the config)
* Prepared templates for sending (with storage on the side of PHP-script, there is a standard template - **'default'**)
* GET-parameters that handle the script:
- **password** (password of access),
- **to_email** (email address of the recipient),
- **to_name** (recipient's name),
- **from_email** (email address of the sender),
- **from_name** (sender's name),
- **title** (the title of the message, the subject of the letter),
- **body** (body of the letter (html)),
- **about** (the copyright at the bottom of the letter),
- **template** (the template to be used when sending the message, the template name in the folder is specified - **/templates/**)

