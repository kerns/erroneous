Erroneous
======

Better Apache error messages.

![503 Preview Image](https://raw.github.com/Stratos42/erroneous/master/screenshot.jpg)

## Configuration

By default, a mail is send with each 5xx error.
For change or disable this, modify include/error-footer.inc.php

## Apache

Just copy the directory erroneous in /usr/share/apache2/ and configure apache.


	Alias /error/ "/usr/share/apache2/erroneous/"

	<Directory "/usr/share/apache2/erroneous">
		AllowOverride None
		Options IncludesNoExec
		AddOutputFilter Includes html
		AddHandler type-map var
		Order allow,deny
		Allow from all
	</Directory>

	ErrorDocument 400 /error/400.php
	ErrorDocument 401 /error/401.php
	ErrorDocument 403 /error/403.php
	ErrorDocument 404 /error/404.php
	ErrorDocument 405 /error/405.php
	ErrorDocument 408 /error/408.php
	ErrorDocument 410 /error/410.php
	ErrorDocument 411 /error/411.php
	ErrorDocument 412 /error/412.php
	ErrorDocument 413 /error/413.php
	ErrorDocument 414 /error/414.php
	ErrorDocument 415 /error/415.php
	ErrorDocument 500 /error/500.php
	ErrorDocument 501 /error/501.php
	ErrorDocument 502 /error/502.php
	ErrorDocument 503 /error/503.php
	ErrorDocument 505 /error/505.php
	ErrorDocument 506 /error/506.php
	ProxyPass /error !

## Nginx

TODO
