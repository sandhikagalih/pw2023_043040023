<?php
require 'config.php';

function conn()
{
  $conn = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to connect');
  return $conn;
}

function query($query)
{
  $conn = conn();
  $result = mysqli_query($conn, $query) or die('Query GAGAL! ' . mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

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
