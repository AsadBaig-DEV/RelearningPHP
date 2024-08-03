
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

  require "associative-arrays.view.php";
