<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cards Save</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        require_once 'search-results.php';
        require_once 'cards.php';
        if (isset($_POST['id'])) {
            $cards = new Card();
            $cards->setId($_POST['id']);
            $cards->setCardname($_POST['name']);
            $cards->setImageURL($_POST['imageURL']);
            $cards->setArtist($_POST['artist']);
            $cards->setPower($_POST['power']);
            $cards->setDef($_POST['toughness']);
            $cards->setText($_POST['oracle_text']);
            $cards->setFlavor_text($_POST['flavor_text']);
            $cards->setType($_POST['type_line']);
            $cards->setManaCost($_POST['mana_cost']);
            $cards->setRarity($_POST['rarity']);
            $cards->setCmc($_POST['cmc']);
            $cards->setSetName($_POST['set_name']);
            $cards->setSetType($_POST['set_type']);
            // $cards->setColors($_POST['color_identity']);
            if ($cards->insert()) { ?>
                <script>
                    window.alert("Added to Favorites");
                    window.location.href = "./search-results.php";
                </script>
            <?php
                header('location: /almanamagic/html-pages/search-results.php?name=' . ($_POST['name']));
            } else {
            ?>
                <script>
                    window.alert("Error");
                    window.location.href = "./search-results.php";
                </script>
        <?php
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>