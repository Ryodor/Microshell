<?php
// cat.php for  in /home/ryod1/piscine/week4/microShell/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 26 16:08:45 2016 SELATNI Ryad
// Last update Wed Oct 26 18:27:30 2016 SELATNI Ryad
//

function	is_it_file($path_file)
{
  if (file_exists($path_file) == FALSE)
    echo "cat: No such file or directory\n";
  else if (is_dir($path_file) == TRUE)
    echo "cat: Is a directory\n";
  else if (is_readable($path_file) == FALSE)
    echo "cat: Permissionn denied\n";
  else if (fopen($path_file, "r") == FALSE)
    echo "cat: Cannot open file\n";
  else if (filesize($path_file) == 0)
    echo "";
  if (is_dir($path_file) == TRUE || is_readable($path_file) == FALSE ||
      fopen($path_file, "r") == FALSE || file_exists($path_file) == FALSE)
    return 1;
}

function	cat($path_file)
{
  $path_file = just_path($path_file);
  $path_file = tilt_path($path_file);
  if (is_it_file($path_file) == 1)
    return 0;
  $fpath = fopen($path_file, "r");
  $content = fread($fpath, filesize($path_file));
  echo "$content\n";
  fclose($fpath);
}