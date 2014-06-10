<?php 

echo "You can access this folder! It's public for you!";

// wpa15.local
// point dir /home/Public/thiha.me/public/wpa15/phonedir/public
/*
c:/xampp/htdocs 
create wpa15 > phonedir > public
http://myblogit.net/2007/06/26/4-steps-to-apache-with-virtual-host-on-windows/
4 step vitual hosts for windows - search keyword

c:/xampp/htdocs/phoneoop/public

hosts
127.0.0.1 phonedir.local


#127.0.0.1
#
127.0.0.1 wpa15.local
c:xampp\apache\conf\extra

<VirtualHost *:80>
	ServerName wpa15.local
	DocumentRoot "C:/xampp/htdocs/wpa15/phonedir/public"
	<Directory />
		Options FollowSymLinks
		AllowOverride All
	</Directory>
	<Directory "C:/xampp/htdocs/wpa15/phonedir/public">
		Options Indexes FollowSymLinks
		AllowOverride All
		Order allow,deny
		Allow from all
	</Directory>
</VirtualHost>


*/
 ?>
