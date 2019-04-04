#!/usr/bin/env php
<?php
// microshell.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 05:39:32 2016 SELATNI Ryad
// Last update Wed Oct 26 19:43:15 2016 SELATNI Ryad
//

require('echo.php');
require('fill_tab.php');
require('my_pwd.php');
require('cdir.php');
require('utile.php');
require('list_file.php');
require('envi.php');
require('cat.php');
require('setenv.php');

function	commande($law,$chain,$env_var,$env_name)
{
  if ($law[0] == "echo")
    echos($law);
  else if ($law[0] == "exit")
    return 0;
  else if ($law[0] == "pwd")
    my_pwd();
  else if ($law[0] == "cd")
    cdir_sp($chain);
  else if ($law[0] == "ls")
    list_file($chain);
  else if ($law[0] == "env")
    display_env($env_var,$env_name);
  else if ($law[0] == "cat")
    cat($chain);
  else if ($law[0] == "setenv")
    return 1;
  else if ($chain == FALSE)
    return 0;
  else
  echo "command not found\n";
}

function	main($ac, $av)
{
  $name = "me";
  $law[0] = "i";
  $chain = "i";
  $env_var = copy_env();
  $env_name = name_var_env();
  
  if (isset($av[1]) == TRUE)
    $name = $av[1];
  while ($law[0] != "exit")
    {
      echo "$name >";
      $chain = readline();
      $law = fill_tab($chain);
      if (commande($law,$chain,$env_var,$env_name) == 1)
	{
	  $env_var = set_env($env_var,$env_name,$law);
	  $env_name = set_env_name($env_var,$env_name,$law);
	};
    }
}

main($argc,$argv);
