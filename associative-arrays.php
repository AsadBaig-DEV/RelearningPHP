<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PHP Arrays</title>
</head>

<body>

  <!-- PHP echo with arrays -->
  <?php
  $books = [
    [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. D',
      'purchaseUrl' => 'example.com',
      'releaseYear' => '2000'
    ],
    [
      'name' => 'The Langolier',
      'author' => 'NA',
      'purchaseUrl' => 'example.com',
      'releaseYear' => '2010'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Wier',
      'purchaseUrl' => 'example.com',
      'releaseYear' => '2011'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Wier',
      'purchaseUrl' => 'example.com',
      'releaseYear' => '2021'
    ]
  ];
  ?>

  <h1><?= "Recommended Books(PHP array)" ?></h1>
  <ul>
    <?php foreach ($books as $book) : ?>
      <a href=" <?= $book['purchaseUrl'] ?>">
        <li> <?= $book['name'] . $book['releaseYear']  ?></li>
      </a>
    <?php endforeach; ?>
  </ul>

</body>

</html>