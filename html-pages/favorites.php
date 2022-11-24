<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./styles.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <a href="/almanamagic/html-pages/login.php"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="/almanamagic/html-pages/favorites.php"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="/almanamagic/html-pages/logout.php"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
      </div>
    </div>
  </footer>
  <h1 style="padding-left: 45%; padding-top:20px; font-weight: bold;">My Favorite Cards</h1>
  <div>
    <?php
    require_once "cards.php";
    if((isset ($_SESSION['user'])))
{
  $cards = new Card();
    $resp = $cards->showAll();
    if ($cards->showAll() != null) {
      foreach ($resp as $card) {
        echo "
        <div class=' w3-card-4 cardPos'>
            <div class='row'>
                <div class='column'>
            <div>
                <img src=" . $card['imageURL'] . " class = 'image'>
            </div>";
        echo "
            <h5>Card ID: " . $card['id'] . "<h5>";
        echo "<div>
                <h5>Name: " . $card['name'] . "<h5>
            </div>";

        echo "<div>
                <a href = delete.php?id=" . $card['id'] . ">Delete from favorites</a>
            </div>

            

                </div>
            </div>
        </div>";
  
} 
    } 
  else {
    ?>
      <script>
        window.alert("No cards in favorite list");
        window.location.href = "./index.php";
      </script>
    <?php
    }
  }
  
    ?>
  </div>
</body>

</html>