<!-- Database Include -->
<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Title -->
    <title>php-ajax-dischi</title>
</head>
<body>
    
    <!-- Header -->
    <header>
        <div class="img-container">

            <!-- Logo -->
            <img src="./img/spotify-logo.png" alt="spotify-logo">
        </div>
    </header>

    <!-- Main -->
    <main>

        <!-- Album -->
        <div class="product-card-container">

            <!-- Ciclo Foreach -->
            <?php foreach($albums as $album) { ?>

                <div class="product-card">

                    <!-- Image -->
                    <div class="img-wrapper">
                        <img src="<?php echo $album['poster']; ?>" alt="poster">
                    </div>

                    <!-- Title -->
                    <h3 class="title">
                        <?php echo $album['title']; ?>
                    </h3>

                    <!-- Author -->
                    <div class="author">
                        <?php echo $album['author']; ?>
                    </div>

                    <!-- Year -->
                    <div class="year">
                        <?php echo $album['year']; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>