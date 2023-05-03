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
      width: 50px;
      height: 50px;
      border: 1px solid #000;
      display: inline-block;
      line-height: 30px;
      text-align: center;
      font-size: .8rem;
      font-family: arial;
    }

    .hitam {
      background-color: #333;
    }
  </style>
</head>

<body>

  <?php for ($i = 0; $i < 5; $i++) { ?>
    <?php if ($i % 2 === 1) { ?>
      <?php for ($j = 0; $j < 5; $j++) { ?>
        <?php if ($j % 2 === 0) { ?>
          <div class="kotak"></div>
        <?php } else { ?>
          <div class="kotak hitam"></div>
        <?php } ?>
      <?php } ?>
    <?php } else { ?>
      <?php for ($j = 0; $j < 5; $j++) { ?>
        <?php if ($j % 2 === 0) { ?>
          <div class="kotak hitam"></div>
        <?php } else { ?>
          <div class="kotak"></div>
        <?php } ?>
      <?php } ?>
    <?php } ?>
    <br>
  <?php } ?>

</body>

</html>