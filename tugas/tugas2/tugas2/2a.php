<?php
$nama_depan = 'Sandhika';
$nama_belakang = 'Galih';

for ($i = 1; $i <= 16; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "$nama_depan $nama_belakang <br>";
  } else if ($i % 3 === 0) {
    echo "$nama_depan <br>";
  } else if ($i % 5 === 0) {
    echo "$nama_belakang <br>";
  } else {
    echo "$i <br>";
  }
}

echo ". <br>";
echo ". <br>";
echo ". <br>";
