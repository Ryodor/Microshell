<?php
// list_file.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 14:00:39 2016 SELATNI Ryad
// Last update Wed Oct 26 18:28:09 2016 SELATNI Ryad
//

function	display_ls($tab)
{
  $i = 0;

  while (isset($tab[$i]) == TRUE)
    {
      if ($tab[$i][0] == ".")
	echo "";
      else if (is_dir($tab[$i]) == TRUE)
	echo "$tab[$i]/\n";
      else if (is_dir($tab[$i]) == FALSE)
	{
	  if (is_executable($tab[$i]) == TRUE)
	    echo "$tab[$i]*\n";
	  else if (is_link($tab[$i]) == TRUE)
	    echo "$tab[$i]@\n";
	  else
	    echo "$tab[$i]\n";
	}
      $i++;
    }
}

function	path_ls($dirc)
{
  $i = 0;
  $y = 0;
  $path = "i";

  while (isset($dirc[$i]) == TRUE && ord($dirc[$i]) != 32)
    $i++;
  while (isset($dirc[$i]) == TRUE && ord($dirc[$i]) == 32)
    $i++;
  while (isset($dirc[$i]) == TRUE)
    {
      $path[$y] = $dirc[$i];
      $y++;
      $i++;
    }
  return $path;
}

function	list_file($dirc)
{
  if ($dirc != "ls")
    $dir = path_ls($dirc);
  else
    $dir = ".";
  if (is_dir($dir) == FALSE)
    {
      echo "Not a directory\n";
      return 0;
    }
  $tab = scandir($dir);
  display_ls($tab);
}