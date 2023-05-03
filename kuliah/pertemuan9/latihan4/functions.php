<?php
define('BASE_URL', '/pw2023_043040023/kuliah/pertemuan9/latihan3/');

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
