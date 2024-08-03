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

  function filterByAuthor($books, $author)
  {
    $filteredBooks = [];

    foreach ($books as $book) {
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }
    }

    return $filteredBooks;
  }

  function filter($items, $key, $value)
  {
    $filteredItems = [];

    foreach ($items as $item) {
      if ($item[$key] === $value) {
        $filteredItems[] = $item;
      }
    }

    return $filteredItems;
  }
  function lamdaFilter($items, $fn)
  {
    $filteredItems = [];

    foreach ($items as $item) {
      if ($fn($item)) {
        $filteredItems[] = $item;
      }
    }

    return $filteredItems;
  }

  $filteredBooks = filter($books, 'author', 'Andy Wier');

  $lamdaFilteredBooks = lamdaFilter($books, function ($book) {
    return $book['author'] === 'Andy Wier';
  });

  $arrayFilteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Andy Wier';
  });

  ?>

  <h1><?= "Recommended Books(PHP associative array)" ?></h1>
  <ul>
    <?php foreach ($books as $book) : ?>
      <a href=" <?= $book['purchaseUrl'] ?>">
        <li> <?= $book['name'] . $book['releaseYear']  ?></li>
      </a>
    <?php endforeach; ?>
  </ul>

  <h1><?= "Recommended Books(PHP asso. array with if filter)" ?></h1>
  <ul>
    <?php foreach ($books as $book) : ?>
      <?php if ($book['author'] === 'Andy Wier') : ?>
        <li>
          <a href=" <?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

  <h1><?= "Recommended Books(PHP asso. array with function filter)" ?></h1>
  <ul>
    <?php foreach (filterByAuthor($books, 'Andy Wier') as $book) : ?>
      <li>
        <a href=" <?= $book['purchaseUrl'] ?>">
          <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <h1><?= "Recommended Books(PHP asso. array with annonymous function)" ?></h1>
  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href=" <?= $book['purchaseUrl'] ?>">
          <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <h1><?= "Recommended Books(PHP asso. array with lamda function)" ?></h1>
  <ul>
    <?php foreach ($lamdaFilteredBooks as $book) : ?>
      <li>
        <a href=" <?= $book['purchaseUrl'] ?>">
          <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <h1><?= "Recommended Books(PHP asso. array with array_filter)" ?></h1>
  <ul>
    <?php foreach ($arrayFilteredBooks as $book) : ?>
      <li>
        <a href=" <?= $book['purchaseUrl'] ?>">
          <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>