<?php 
include_once "base_include.php";
include_once "main.php";


if(substr($_SERVER['REMOTE_ADDR'], 0, 3) != "100" && $_SERVER['REMOTE_ADDR'] != "127.0.0.1") 
{
  exit("Hello world jacob er gud");
}
main_html();