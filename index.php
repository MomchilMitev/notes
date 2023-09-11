<?php

$books = [
    [
        'title' => 'Title 1',
        'author' => 'Author 1',
        'year' => 2001,
        'purchaseUrl' => 'example.com'
    ],
    [
        'title' => 'Title 2',
        'author' => 'Author 2',
        'year' => 2000,
        'purchaseUrl' => 'example.com'
    ],
    [
        'title' => 'Title 3',
        'author' => 'Author 3',
        'year' => 2000,
        'purchaseUrl' => 'example.com'
    ],
    [
        'title' => 'Title 4',
        'author' => 'Author 2',
        'year' => 2000,
        'purchaseUrl' => 'example.com'
    ],
];

//    function filter($books, $fn) {
//        $filteredBooks = [];
//
//        foreach ($books as $book) {
//            if($fn($book)) {
//                $filteredBooks[] = $book;
//            }
//        }
//
//        return $filteredBooks;
//    }

$filteredBooks = array_filter($books, function($book) {
    return $book['author'] === 'Author 2';
});

require "views/index.view.php";
