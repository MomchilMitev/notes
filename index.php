<?php
require "functions.php";

$header_title = 'Home';

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

require "views/index.view.php";
