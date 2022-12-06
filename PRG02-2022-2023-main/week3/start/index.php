<?php
/** @var array $musicAlbums */

// Setup connection with database

// General settings
$host       = "localhost";
$database   = "music_collection";
$user       = "root";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());;


// Select all the albums from the database
$query = 'SELECT * FROM `albums`';


$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

// Store the albums in an array
$albums = [];
while($row = mysqli_fetch_assoc($result))
{
    // elke rij (dit is een album) wordt aan de array 'albums' toegevoegd.
    $albums[] = $row;
}
// Close the connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Music Collection</h1>
    <hr>
    <table class="table is-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Tracks</th>
            <th></th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="6" class="has-text-centered">&copy; My Collection</td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($albums as $index => $album) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $album['artist'] ?></td>
                <td><?= $album['name'] ?></td>
                <td><?= $album['genre'] ?></td>
                <td><?= $album['year'] ?></td>
                <td><?= $album['tracks'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>