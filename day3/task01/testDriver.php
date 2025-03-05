<?php

require_once 'Author.php';
require_once 'Book.php';

$author1 = new Author("J.K. Rowling", "jkrowling@example.com", 'f');
$author2 = new Author("Stephen King", "sking@example.com", 'm');

$book = new Book("Harry Potter and the Sorcerer's Stone", [$author1, $author2], 29.99, 10);

echo $book->toString() . "\n";
echo "Author Names: " . $book->getAuthorNames() . "\n";

$book->setPrice(19.99);
$book->setQty(5);

echo $book->toString() . "\n";