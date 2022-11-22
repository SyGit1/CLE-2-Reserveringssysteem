<?php
//Multidimensional array with the music collection data
$musicAlbums = [
    [
        'artist'    => 'Eminem',
        'album'     => 'The Eminem Show',
        'genre'     => 'Rap',
        'year'      => '2002',
        'tracks'    => '20'
    ],
    [
        'artist'    => 'Vieze Askbak',
        'album'     => 'Super Techno',
        'genre'     => 'Techno',
        'year'      => '2022',
        'tracks'    => '1'
    ],
    [
        'artist'    => 'NF',
        'album'     => 'Mansion',
        'genre'     => 'Rap',
        'year'      => '2015',
        'tracks'    => '12'
    ],
    [
        'artist'    => 'Indecorum',
        'album'     => 'Sanctus',
        'genre'     => 'EDM/Techno',
        'year'      => '2020',
        'tracks'    => '7'
    ],
    [
        'artist'    => 'Morray',
        'album'     => 'Street Sermons',
        'genre'     => 'Rap/HipHop',
        'year'      => '2021',
        'tracks'    => '13'
    ]
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1>Sybren's Pro Music (Pro people only)</h1>
<hr/>
<div>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; Copyright</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($musicAlbums as $index => $album) { ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $album['artist'] ?></td>
            <td><?= $album['album'] ?></td>
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