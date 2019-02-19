<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE hmtl>
<html lang='en' xmlns="http://www.w3.org/1999/html">
<head>
    <title>Foobook0</title>
    <meta charset='utf-8'>


    <!-- <link href='/styles/app.css' rel='stylesheet'> -->

</head>
<body>

<h1>Foobooks0</h1>

<form method='GET' action='search.php'>
    <label>Search for a book by title
        <input type='text' name='searchTerm' value='<?php if (isset($searchTerm)) echo $searchTerm ?>'>
    </label>
    <label>
        <input type='checkbox' name='caseSensitive'>
        Case sensitive
    </label>
    <input type='submit' value='Search'>
</form>
<?php if (isset($searchTerm)): ?>
    You searched for <?=$searchTerm?>.
<?php endif ?>

<?php if (isset($bookCount) and $bookCount == 0): ?>
    No results found.
<?php endif ?>

<?php if(isset($books)): ?>

    <ul class='books'>
        <?php foreach ($books as $title /* key */ => $book /* value */): ?>
            <li class='book'>
                <div class='title'><?= $title ?></div>
                <div class='author'>by <?= $book['author'] ?></div>
                <img src='<?=$book['cover_url']?>' alt='Cover photo for the book <?=$title?>'>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

</body>
</html>