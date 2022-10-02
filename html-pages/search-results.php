<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2" />
    <link rel="stylesheet" href="./w3style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous" />

</head>

<body>
    <footer class="fav">
        <div class="pure-g">
            <div class="pure-u-1-4">
                <a href="index.html"><img class="nav-icons" src="./asset/home-icon.svg" /></a>
            </div>
            <div class="pure-u-1-4">
                <a href="/login.html"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
            </div>
            <div class="pure-u-1-4">
                <a href="/favorites.html"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
            </div>
            <div class="pure-u-1-4">
                <a href="/logout"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
            </div>
        </div>
    </footer>
    <div>
        <?php
        $card = $_GET["name"];
        $url = "https://api.scryfall.com/cards/search?name&q=" . $card . "";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = json_decode(curl_exec($ch), true);
        curl_close($ch);
        foreach ($result['data'] as $res) {
            // echo "<div class='cardPos'><a><img src=" . $res['image_uris']['normal'] . "><a></div>";
        ?>
        <?php
            echo " <div class=' w3-card-4 cardPos'>
                <div class='row'>
                <div class='column'>
                <a><img src=" . $res['image_uris']['normal'] . " class = 'image'></a></div>";
            echo "<div class='column ' ><h5>Card ID: " . $res['id'] . "<h5>";
            echo "<h5>Name: " . $res['name'] . "<h5>";
            echo "<h5>Artist: " . $res['artist'] . "<h5>";
            echo "<h5>Power: " . $res['power'] . "<h5>";
            echo "<h5>Toughness: " . $res['toughness'] . "<h5>";
            echo "<h5>Text: " . $res['oracle_text'] . "<h5>";
            echo "<h5>Flavor text: " . $res['flavor_text'] . "<h5>";
            echo "<h5>Type: " . $res['type_line'] . "<h5>";
            echo "<h5>Mana Cost: " . $res['mana_cost'] . "<h5>";
            echo "<h5>Rarity: " . $res['rarity'] . "<h5>";
            echo "<h5>Cmc: " . $res['cmc'] . "<h5>";
            echo "<h5>Set name: " . $res['set_name'] . "<h5>";
            echo "<h5>Set type: " . $res['set_type'] . "<h5>";

            if ($res['color_identity'][0] == 'R') {
                echo "<h5>Color: Red<h5>";
            }
            if ($res['color_identity'][0] == 'G') {
                echo "<h5>Color: Green<h5>";
            }
            if ($res['color_identity'][0] == 'W') {
                echo "<h5>Color: White<h5>";
            }
            if ($res['color_identity'][0] == 'B') {
                echo "<h5>Color: Black<h5>";
            }
            if ($res['color_identity'][0] == 'U') {
                echo "<h5>Color: Blue<h5>";
            }
            if ($res['color_identity'][1] == 'R') {
                echo "<h5>Color 2: Red<h5>";
            }
            if ($res['color_identity'][1] == 'G') {
                echo "<h5>Color 2: Green<h5>";
            }
            if ($res['color_identity'][1] == 'W') {
                echo "<h5>Color 2: White<h5>";
            }
            if ($res['color_identity'][1] == 'B') {
                echo "<h5>Color 2: Black<h5>";
            }
            if ($res['color_identity'][1] == 'U') {
                echo "<h5>Color 2: Blue<h5>";
            }
            if ($res['color_identity'][2] == 'R') {
                echo "<h5>Color 3: Red<h5>";
            }
            if ($res['color_identity'][2] == 'G') {
                echo "<h5>Color 3: Green<h5>";
            }
            if ($res['color_identity'][2] == 'W') {
                echo "<h5>Color 3: White<h5>";
            }
            if ($res['color_identity'][2] == 'B') {
                echo "<h5>Color 3: Black<h5>";
            }
            if ($res['color_identity'][2] == 'U') {
                echo "<h5>Color 3: Blue<h5>";
            }
            if ($res['color_identity'][3] == 'R') {
                echo "<h5>Color 4: Red<h5>";
            }
            if ($res['color_identity'][3] == 'G') {
                echo "<h5>Color 4: Green<h5>";
            }
            if ($res['color_identity'][3] == 'W') {
                echo "<h5>Color 4: White<h5>";
            }
            if ($res['color_identity'][3] == 'B') {
                echo "<h5>Color 4: Black<h5>";
            }
            if ($res['color_identity'][3] == 'U') {
                echo "<h5>Color 4: Blue<h5>";
            }
            if ($res['color_identity'][4] == 'R') {
                echo "<h5>Color 5: Red<h5>";
            }
            if ($res['color_identity'][4] == 'G') {
                echo "<h5>Color 5: Green<h5>";
            }
            if ($res['color_identity'][4] == 'W') {
                echo "<h5>Color 5: White<h5>";
            }
            if ($res['color_identity'][4] == 'B') {
                echo "<h5>Color 5: Black<h5>";
            }
            if ($res['color_identity'][4] == 'U') {
                echo "<h5>Color 5: Blue<h5>";
            }
            echo "</div>
                    </div>
                    </div>
                    </div>";
        }
        ?>


    </div>


</body>

</html>