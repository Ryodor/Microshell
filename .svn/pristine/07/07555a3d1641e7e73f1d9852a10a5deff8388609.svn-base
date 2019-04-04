<?php
// fill_tab.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 06:48:37 2016 SELATNI Ryad
// Last update Wed Oct 26 18:28:01 2016 SELATNI Ryad
//

function        recov_word($content, $i, $word_or_adr)
{
  $e = 0;
  $copy = "i";

  while (isset($content[$i]) == TRUE &&
	 ((ord($content[$i]) >= 97 && ord($content[$i]) <= 122) ||
	  (ord($content[$i]) >= 65 && ord($content[$i]) <= 90)))
    {
      $copy[$e] = $content[$i];
      $e++;
      $i++;
    }
  if ($word_or_adr == 1)
    return $copy;
  else if ($word_or_adr == 2)
    return $i;
}

function        fill_tab($content)
{
  $tab[0] = "a";
  $i = 0;
  $e = 0;

  while (isset($content[$e]) == TRUE)
    {
      while (isset($content[$e]) == TRUE &&
	     ((ord($content[$e]) < 97 || ord($content[$e]) > 122) &&
	      (ord($content[$e]) < 65 || ord($content[$e]) > 90)))
	$e++;
      $tab[$i] = recov_word($content, $e, 1);
      $i++;
      $e = recov_word($content, $e, 2);
    }
  return $tab;
}
