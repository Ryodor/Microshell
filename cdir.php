<?php
// cdir.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 08:24:02 2016 SELATNI Ryad
// Last update Wed Oct 26 18:27:39 2016 SELATNI Ryad
//

function	just_path($path)
{
  $i = 0;
  $y = 0;
  $o_path = "q";

  while (ord($path[$i]) != 32)
    $i++;
  $i++;
  if (isset($path[$i]) == FALSE)
    return 1;
  else
    while (isset($path[$i]) == TRUE && ord($path[$i]) != 32)
      {
	$o_path[$y] = $path[$i];
	$y++;
	$i++;
      }
  return $o_path;
}

function	tilt_path($path)
{
  $i = 0;
  $new_path = "cd home/ryod1/";
  $y = my_strlen($new_path);

  while (isset($path[$i]) == TRUE && ord($path[$i]) != 126)
    $i++;
  if (isset($path[$i]) == FALSE)
    return $path;
  while (isset($path[$i]) == TRUE)
    {
      $new_path[$y] = $path[$i];
      $i++;
      $y++;
    }
  return $new_path;
}

function	is_past($str)
{
  $i = 0;

  while (isset($str[$i]) == TRUE && ord($str[$i]) != 32)
    $i++;
  while(isset($str[$i]) == TRUE && ord($str[$i]) == 32)
    $i++;
  if (ord($str[$i]) == 45 && isset($str[$i + 1]) == FALSE)
    return 1;
  return 0;
}

function	cdir_sp($path)
{
  $path = tilt_path($path); 
  if (my_strlen($path) == 2)
    {
      chdir("/home/ryod1/");
      $tmp = ("/home/ryod1/");
    }
  else if (is_past($path) == 0)
    if (is_dir(just_path($path)) == FALSE)
      {
	echo "Not a directory\n";
	return 0;
      }
    else
      cdir_ch($path);
}

function	cdir_ch($path)
{
  if (is_dir(just_path($path)) == TRUE)
    {
      $tmp = realpath(just_path($path));
      chdir(just_path($path));
    }
  else if ($path = "cd -")
    {
      if (realpath(just_path($tmp)) == realpath("./"))
	chdir($tmpp);
      else
	{
	  $tmpp = realpath("./");
	  chdir(just_path($tmp));
	}
    }
}