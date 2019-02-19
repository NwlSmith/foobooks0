<?php
session_start();
include 'helpers.php';

#Get data from form request
$searchTerm = $_GET['searchTerm'];

# Load book data
$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);

# Filter book data according to search term
foreach($books as $title => $book) {
    if ($title != $searchTerm) {
        unset($books[$title]);
    }
}

# Store data in the session
$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'books' => $books,
    'bookCount' => count($books)
];

# Redirect back to the form
header('Location: index.php');