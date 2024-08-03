<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PHP Arrays</title>
</head>

<body>
  <!-- HTML tag -->
  <h1>Recommended Books(HTML)</h1>
  <ul>
    <li>Do Androids Dream of Electric Sheep</li>
    <li>The Langoliers</li>
    <li>Project Hail Mary</li>
  </ul>

  <!-- PHP echo -->
  <h1><?= "Recommended Books(PHP echo)" ?></h1>
  <ul>
    <li><?= "Do Androids Dream of Electric Sheep" ?></li>
    <li><?= "The Langoliers" ?></li>
    <li><?= "Project Hail Mary" ?></li>
  </ul>


  <!-- PHP echo with arrays -->
  <?php
  $books = [
    "Do Androids Dream of Electric Sheep",
    "The Langoliers",
    "Project Hail Mary"
  ];
  ?>
  <h1><?= "Recommended Books(PHP array)" ?></h1>
  <ul>
    <?php foreach ($books as $book) {
      echo "<li>$book</li>";
    }
    ?>
  </ul>

  <h1><?= "Recommended Books(PHP array silos)" ?></h1>
  <ul>
    <?php foreach ($books as $book) {
      echo "<li>{$book}&tm;</li>";
    }
    ?>
  </ul>

  <h1><?= "Recommended Books(PHP array shorthand)" ?></h1>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li> <?= $book ?></li>
    <?php endforeach; ?>
  </ul>

  <p>My second book is <?= $books[1] ?> </p>

</body>

</html>