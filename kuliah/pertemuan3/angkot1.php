<?php
$jml_angkot = 10;
$angkot_rusak = 4;

// $i = 1;
// while ($i <= $jml_angkot - $angkot_rusak) {
//   echo "Angkot no.$i beroperasi dengan baik. <br>";
//   $i++;
// }

// for ($i = $jml_angkot - $angkot_rusak + 1; $i <= $jml_angkot; $i++) {
//   echo "Angkot no.$i sedang rusak. <br>";
// }

for ($i = 1; $i <= $jml_angkot; $i++) {
  if ($i === 8 || $i === 5 || $i === 10) {
    echo "Angkot no.$i sedang lembur. <br>";
  } else if ($i < $jml_angkot - $angkot_rusak) {
    echo "Angkot no.$i beroperasi dengan baik. <br>";
  } else {
    echo "Angkot no.$i sedang rusak. <br>";
  }
}
