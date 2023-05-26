<!DOCTYPE html>
<html>

<head>
    <title>Steen, papier, schaar</title>
    <?php include 'src/style.php'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <?php 
            if (isset($_GET['Singleplayer'])) {
                include 'src/singleplayer.php';
            } 
            else {
                include 'src/index.php';
            }
        ?>

    </div>
    <?php include 'src/js.php'; ?>
</body>