<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1c</title>
  <style>
    body {
      font-size: 0;
    }

    .kotak {
      width: 30px;
      height: 30px;
      background-color: salmon;
      border: 1px solid #333;
      display: inline-block;
      line-height: 30px;
      text-align: center;
      font-size: .8rem;
      font-family: arial;
    }
  </style>
</head>

<body>

  <?php for ($i = 10; $i > 0; $i--) { ?>
    <?php for ($j = 1; $j <= $i; $j++) { ?>
      <div class="kotak"><?= $j; ?></div>
    <?php } ?>
    <br>
  <?php } ?>

</body>

</html>