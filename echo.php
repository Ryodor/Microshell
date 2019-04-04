<?php
// echo.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 06:31:46 2016 SELATNI Ryad
// Last update Wed Oct 26 18:27:46 2016 SELATNI Ryad
//

function	echos($law)
{
  $i = 1;

  while (isset($law[$i]) == TRUE)
    {
      echo "$law[$i] ";
      $i++;
    }
  echo "\n";
}