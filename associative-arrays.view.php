<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PHP Arrays</title>
</head>

<body>

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