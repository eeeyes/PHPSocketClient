<html>
	<?php
		$host = "127.0.0.1";	
		$port = 7777;

		$socket = socket_create(AF_INET,SOCK_STREAM,0) or die("couldn't create socket");
		$result = socket_connect($socket,$host,$port) or die("couldn't connect socket");
		$result = socket_read($socket,1024) or die("couldn't read server response");
		echo "reply from server:" ,$result;
	?>
</html>
