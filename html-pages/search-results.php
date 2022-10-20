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
        <a href="/almanamagic/html-pages"><img class="nav-icons" src="./asset/home-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="/almanamagic/html-pages/login.html"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="/almanamagic/html-pages/list.php"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="/almanamagic/html-pages/logout"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
      </div>
    </div>
  </footer>
  <h1 style="padding-left: 45%; padding-top:20px; font-weight: bold;">Cards Found</h1>
    <div class=' cardPos'>
        <?php
        $card = $_GET["name"];
        $url = 'https://api.scryfall.com/cards/search?name&q=' . $card;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = json_decode(curl_exec($ch), true);
        curl_close($ch);
        
        foreach ($result['data'] as $res) {
        ?>
        <?php
            echo " <form action= 'saveCard.php' method='post'>
            <div class=' w3-card-4 '>
                <div class='row'>
                <div class='column'>
                <img src=" . $res['image_uris']['large'] . " class = 'image'></div> 
                <input type = 'hidden' value = ". $res['image_uris']['normal'] ." name = 'imageURL'>";
            echo "
            <div class='column'>
            <div>
                <h7>Card ID: " . $res['id'] . "<h7>
                <input type = 'hidden' value = ". $res['id'] ." name = 'id'> 
            </div>";
            echo "
            <div>
                <h7>Name: " . $res['name'] . "<h7>
                <input type = 'hidden' value = '". $res['name'] ."' name = 'name'>
            </div>";
            echo "
            <div>
                <h7>Artist: " . $res['artist'] . "<h7>
                <input type = 'hidden' value = '". $res['artist'] ."' name = 'artist'>
            </div>";
            echo "
            <div>
                <h7>Power: " . $res['power'] . "<h7>
                <input type = 'hidden' value = '". $res['power'] ."' name = 'power'>
            </div>";
            echo "
            <div>
                <h7>Toughness: " . $res['toughness'] . "<h7>
                <input type = 'hidden' value = '". $res['toughness'] ."' name = 'toughness'>
            </div>
            ";
            echo "
            <div>
                <h7>Text: " . $res['oracle_text'] . "<h7>
                <input type = 'hidden' value = '". $res['oracle_text'] ."' name = 'oracle_text'>
            </div>";
            echo "
            <div>
                <h7>Flavor text: " . $res['flavor_text'] . "<h7>
                <input type = 'hidden' value = '". $res['flavor_text'] ."' name = 'flavor_text'>
            </div>";
            echo "<div>
                <h7>Type: " . $res['type_line'] . "<h7>
                <input type = 'hidden' value = '". $res['type_line'] ."' name = 'type_line'>
            </div>";
            echo "
            <div>
                <h7>Mana Cost: " . $res['mana_cost'] . "<h7>
                <input type = 'hidden' value = '". $res['mana_cost'] ."' name = 'mana_cost'>
            </div>";
            echo "
            <div>
                <h7>Rarity: " . $res['rarity'] . "<h7>
                <input type = 'hidden' value = '". $res['rarity'] ."' name = 'rarity'>
            </div>";
            echo "
            <div>
                <h7>Cmc: " . $res['cmc'] . "<h7>
                <input type = 'hidden' value = '". $res['cmc'] ."' name = 'cmc'>
            </div>";
            echo "
            <div>
                <h7>Set name: " . $res['set_name'] . "<h7>
                <input type = 'hidden' value = '". $res['set_name'] ."' name = 'set_name'>
            </div>";
            echo "
            <div>
                <h7>Set type: " . $res['set_type'] . "<h7>
                <input type = 'hidden' value = '". $res['set_type'] ."' name = 'set_type'>
            </div>
            ";

            if ($res['color_identity'][0] == 'R') {
                echo "<h7>Color: Red<h7><br>";
            }
            if ($res['color_identity'][0] == 'G') {
                echo "<h7>Color: Green<h7><br>";
            }
            if ($res['color_identity'][0] == 'W') {
                echo "<h7>Color: White<h7><br>";
            }
            if ($res['color_identity'][0] == 'B') {
                echo "<h7>Color: Black<h7><br>";
            }
            if ($res['color_identity'][0] == 'U') {
                echo "<h7>Color: Blue<h7><br>";
            }
            if ($res['color_identity'][1] == 'R') {
                echo "<h7>Color 2: Red<h7><br>";
            }
            if ($res['color_identity'][1] == 'G') {
                echo "<h7>Color 2: Green<h7><br>";
            }
            if ($res['color_identity'][1] == 'W') {
                echo "<h7>Color 2: White<h7><br>";
            }
            if ($res['color_identity'][1] == 'B') {
                echo "<h7>Color 2: Black<h7><br>";
            }
            if ($res['color_identity'][1] == 'U') {
                echo "<h7>Color 2: Blue<h7><br>";
            }
            if ($res['color_identity'][2] == 'R') {
                echo "<h7>Color 3: Red<h7><br>";
            }
            if ($res['color_identity'][2] == 'G') {
                echo "<h7>Color 3: Green<h7><br>";
            }
            if ($res['color_identity'][2] == 'W') {
                echo "<h7>Color 3: White<h7><br>";
            }
            if ($res['color_identity'][2] == 'B') {
                echo "<h7>Color 3: Black<h7><br>";
            }
            if ($res['color_identity'][2] == 'U') {
                echo "<h7>Color 3: Blue<h7><br>";
            }
            if ($res['color_identity'][3] == 'R') {
                echo "<h7>Color 4: Red<h7><br>";
            }
            if ($res['color_identity'][3] == 'G') {
                echo "<h7>Color 4: Green<h7><br>";
            }
            if ($res['color_identity'][3] == 'W') {
                echo "<h7>Color 4: White<h7><br>";
            }
            if ($res['color_identity'][3] == 'B') {
                echo "<h7>Color 4: Black<h7><br>";
            }
            if ($res['color_identity'][3] == 'U') {
                echo "<h7>Color 4: Blue<h7><br>";
            }
            if ($res['color_identity'][4] == 'R') {
                echo "<h7>Color 5: Red<h7><br>";
            }
            if ($res['color_identity'][4] == 'G') {
                echo "<h7>Color 5: Green<h7><br>";
            }
            if ($res['color_identity'][4] == 'W') {
                echo "<h7>Color 5: White<h7><br>";
            }
            if ($res['color_identity'][4] == 'B') {
                echo "<h7>Color 5: Black<h7><br>";
            }
            if ($res['color_identity'][4] == 'U') {
                echo "<h7>Color 5: Blue<h7><br>";
            }
            echo "  
            <button class = 'w3-button' type = 'submit'><img src='./asset/favicon2.svg' ></button>
            </form>        
                        </div>
                    </div>
                </div>
            ";
        }
        ?>


    </div>


</body>

</html>