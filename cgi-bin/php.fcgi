#!/bin/bash
### Set PATH ###
PHP_CGI=/usr/bin/php-cgi
#PHP_FCGI_CHILDREN=4
PHP_FCGI_MAX_REQUESTS=2000
#export PHP_FCGI_CHILDREN
export PHP_FCGI_MAX_REQUESTS
exec $PHP_CGI
