<!DOCTYPE html>
<html>

<head>
    <title>Steen, papier, schaar</title>
    <?php include 'src/style.php'; ?>
</head>

<body>
    <div class="container m-auto">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Steen, papier, schaar</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-center align-items-center">
                <img src="src/robot.png" width="75%">

            </div>
            <div class="col-4 text-center align-items-center">
                <img src="src/ranked.png" width="75%">

            </div>
            <div class="col-4 text-center align-items-center">
                <img src="src/vuist.png" width="75%">

            </div>
            <div class="row">
            <div class="col-4 text-center align-items-center">

                <a href="game.php?Singleplayer" class="btn btn-primary btn-lg btn-block">Singleplayer</a>
            </div>
        </div>
    </div>
</body>
<?php include 'src/js.php'; ?>

</html>