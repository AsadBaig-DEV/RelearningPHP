<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PHP Conditionals</title>
  <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>

</head>

<body>
  <!-- HTML tag -->
  <h1>You have read "Dark Matter." </h1>
  <!-- PHP echo -->
  <h1><?php echo "You have read 'Dark Matter.'"; ?></h1>

  <?php
  $bookName = "Dark Matter";
  ?>
  <h1><?php echo "You have read $bookName"; ?></h1>

  <?php
  $read = false;
  if ($read) {
    $message = "You have read $bookName";
  } else {
    $message = "You have NOT read $bookName";
  }
  ?>

  <h1>
    <?php echo $message; ?>
  </h1>

  <h1>
    <?= $message; ?>
  </h1>

</body>

</html>