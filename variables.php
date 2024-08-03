<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PHP Variables</title>
</head>

<body>
  <!-- HTML tag -->
  <h1>Hello, World</h1>

  <!-- PHP echo -->
  <h1> <?php echo "Hello, World"; ?> </h1>

  <!-- PHP echo with concatinate -->
  <h1> <?php echo "Hello, " . "World"; ?> </h1>

  <!-- PHP echo with variable concatinate -->
  <h1>
    <?php
    $greeting = "Hello,";
    echo $greeting . " World";
    ?>
  </h1>

  <!-- PHP echo with variable and space concatinate -->
  <h1>
    <?php
    $greeting = "Hello,";
    echo $greeting . " " . "World";
    ?>
  </h1>

  <!-- PHP echo with variable and no concatinate -->
  <h1>
    <?php
    $greeting = "Hello,";
    echo "$greeting World";
    ?>
  </h1>

</body>

</html>