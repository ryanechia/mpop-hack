# mpop-hack

This demo utilises HTML, AJAX, JQuery for the front-end,
PHP, and MySQL for the back-end, and requires hosting capabilities to deploy.

for security reasons sensitive data like usernames and passwords has been removed.

A working demo can be found at http://mpop.ryanechia.com

Currently supports 3 actions: 

* Ctrl + C - Copy
* Ctrl + S - Save
* Ctrl + P - Paste

an example of MySQL database schema and a tuple is as follows:

| ctrl *int(4)* | alt *int(4)* | shift *int(4)* | keycode *int(11)*| action *varchar(200)*|
| --- | --- | --- | --- | --- |
| 1 | 0 | 0 | 67 | copy |

keycodes are in UNICODE and different browsers send keycodes differently.

This demo has only been tested on Firefox 51.0.1 (32bit) and Google Chrome 56.0.2924.87 (64bit)