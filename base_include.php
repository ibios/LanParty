<?php

define("api_key","bYEfuRmLj4Ur5qb3F01R1k2RcjEmGXhchkawXkAh");


function get_tournament_info(){
  
  $url = "https://api.challonge.com/v1/tournaments.json?api_key=".api_key;
  
  $content = file_get_contents($url);
  
  $content = json_decode($content);
  return $content;
}