<?php
  header("Content-Type:text/html;charset=utf-8");
  header("Access-Control-Allow-Origin:*");

  $str = <<<str
  [
  	{
  		"name":"yz"
  	}
  ]

  str;
  echo $str;
?>
