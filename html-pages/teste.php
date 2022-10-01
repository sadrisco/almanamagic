<?php
        require_once 'cards.php';
        $cards = new Cards();
        if (isset($_GET['name'])) {
            $card = $_GET["name"];
            $url = "https://api.scryfall.com/cards/search?name&q=" . $card . "";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);
            foreach($result['data'] as $res){
                echo "<img src=" . $res['image_uris']['small'] . ">";
            }
        }