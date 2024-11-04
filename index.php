<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtWorks Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>WELCOME TO GROUP 2 ARTS GALLERY</h1>
        <nav>
            <a href="index.php">HOME</a>
            <a href="artist.php">FEATURED ARTWORK</a>
        </nav>
    </header>
    <main>
        <h2>UPDATED ARTWORKS</h2>
        <div class="artwork">
            <img src="TREES.jfif" alt="Artwork 1">
            <p><strong>Title:</strong> Tree <br><strong>Artist:</strong> Janna Roldan</p>
        </div>
        <div class="artwork">
            <img src="SUNSET.jfif" alt="Artwork 2">
            <p><strong>Title:</strong> Sunset <br><strong>Artist:</strong> Janna Roldan </p>
        </div>
    </main>
    <footer>
        <p>&copy; <?php echo date("d M Y"); ?> ArtWorks Gallery</p>
    </footer>
</body>
</html>
