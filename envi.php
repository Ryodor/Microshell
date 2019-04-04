<?php
// envi.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 14:50:49 2016 SELATNI Ryad
// Last update Wed Oct 26 19:01:16 2016 SELATNI Ryad
//

function	display_env($tab_env,$tab_name)
{
  $i = 0;

  while (isset($tab_env[$i]) == TRUE && isset($tab_name[$i]) == TRUE)
    {
      echo "$tab_name[$i]=$tab_env[$i]\n";
      $i++;
    }
}

function	name_var_env()
{
  $tab_name[0] = "USERNAME";
  $tab_name[1] = "HOME";
  $tab_name[2] = "PWD";
  $tab_name[3] = "OLDPWD";
  return $tab_name;
}

function	copy_env()
{
  $tab_env[0] = get_current_user();
  $tab_env[1] = getenv("USER");
  $tab_env[2] = getcwd();
  $tab_env[3] = $tab_env[2];
  return $tab_env;
}