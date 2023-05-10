<div class="container">
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <img src="src/vuist.png" width="25%">
            <h1>Singleplayer</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>Maak uw zet</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center align-items-center">
            <button class="btn btn-primary btn-lg btn-block" onclick="singleplayer('steen')">Steen</button>
        </div>
        <div class="col-4 text-center align-items-center">
            <button class="btn btn-primary btn-lg btn-block" onclick="singleplayer('papier')">Papier</button>
        </div>
        <div class="col-4 text-center align-items-center">
            <button class="btn btn-primary btn-lg btn-block" onclick="singleplayer('schaar')">Schaar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p id="result"></p>
        </div>
    </div>
</div>
<script src="src\singleplayers.js"></script>
