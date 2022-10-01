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
    $cards->setImageURL($result['data'][0]['image_uris']['normal']);
    $cards->setCardName($result['data'][0]['name']);
    $cards->setId($result['data'][0]['id']);
    $cards->setArtist($result['data'][0]['artist']);
    $colors0 = $result['data'][0]['color_identity'][0];
    $colors1 = $result['data'][0]['color_identity'][1];
    $colors2 = $result['data'][0]['color_identity'][2];
    $colors3 = $result['data'][0]['color_identity'][3];
    $colors4 = $result['data'][0]['color_identity'][4];
    $cards->setColors([$colors0, $colors1, $colors2, $colors3, $colors4]);
    $cards->setPower($result['data'][0]['power'][0]);
    $cards->setDef($result['data'][0]['toughness'][0]);
    $cards->setText($result['data'][0]['oracle_text']);
    $cards->setFlavor_text($result['data'][0]['flavor_text']);
    $cards->setType($result['data'][0]['type_line']);
    $cards->setManaCost($result['data'][0]['mana_cost']);
    $cards->setRarity($result['data'][0]['rarity']);
    $cards->setCmc($result['data'][0]['cmc']);
    $cards->setSetName($result['data'][0]['set_name']);
    $cards->setSetType($result['data'][0]['set_type']);
    if ($cards->insert()) {
?>
        <script>
            window.alert("card successfully inserted");
            window.location.href = "./api_search.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert("Error");
            window.location.href = "./api_search.php";
        </script>
<?php
    }
}
?>