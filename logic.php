<?php
session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $books = $results['books'];
    $searchTerm = $results['searchTerm'];
    $bookCount = $results['bookCount'];
}

$_SESSION['results'] = null;

session_unset();