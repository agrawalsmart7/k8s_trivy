<?php

$url=@$_GET['url'];

$request=fopen($url,'r');
echo fgets($request);

?>