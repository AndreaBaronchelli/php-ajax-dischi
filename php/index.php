<?php include __DIR__ . '/partials/database.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/main.css">
    <title>PHP DISCHI</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><img src="./assets/logo.png" alt="Spotify Logo"></div>
        </div>
    </header>
    
    <main>
        <div class="container">
            <?php foreach($database as $disc) { ?>
            <div class="card">
                <img src="<?php echo $disc['poster']?>" alt="">
                <div class="title"><h2><?php echo $disc['title']?></h2></div>
                <div class="author"><?php echo $disc['author']?></div>
                <div class="year"><?php echo $disc['year']?></div>
                <div class="genre"><?php echo $disc['genre']?></div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>