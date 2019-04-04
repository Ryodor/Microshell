<?php
// setenv.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 19:05:28 2016 SELATNI Ryad
// Last update Wed Oct 26 19:37:23 2016 SELATNI Ryad
//

function	set_env_name($tab_var,$tab_name,$law)
{
  $i = 0;

  if (isset($law[1]) == FALSE || isset($law[2]) == FALSE)
    {
      echo "Not any arguments : [setenv NAME_VAL value]\n";
      return 0;
    }
  while (isset($tab_var[$i + 1]) == TRUE)
    $i++;
  $tab_name[$i] = $law[1];
  return $tab_name;
}

function	set_env($tab_var,$tab_name,$law)
{
  $i = 0;

  if (isset($law[1]) == FALSE || isset($law[2]) == FALSE)
    {
      echo "Not any arguments : [setenv NAME_VAL value]\n";
      return 0;
    }
  while (isset($tab_var[$i]) == TRUE)
    $i++;
  $tab_var[$i] = $law[2];
  return $tab_var;
}
