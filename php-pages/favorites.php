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
        <a href="index.php"><img class="nav-icons" src="./asset/home-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="login.php"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="favorites.php"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
      </div>
      <div class="pure-u-1-4">
        <a href="logout.php"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
      </div>
    </div>
  </footer>
  <h1 style="padding-left: 45%; padding-top:20px; font-weight: bold;">My Favorite Cards</h1>
  <div class= 'float-container'>
    <?php
    session_start();
    require_once "cards.php";
    if((isset ($_SESSION['user'])))
{
  $cards = new Card();
    $resp = $cards->showAll();
    if ($cards->showAll() != null) {
      foreach ($resp as $card) {
        echo "<div class='float-child'>
                <img src=" . $card['imageURL'] . " class = 'image'>
                <div class='float-text'>";
        echo "
            <h7>Card ID: " . $card['id'] . "<h7>";
        echo "
                <h7><br>Name: " . $card['name'] . "<h7>";

        echo "<a href = delete.php?id=" . $card['id'] . ">
                <br>Delete from favorites</a>
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
  else {
    ?>
      <script>
        window.alert("You need to login");
        window.location.href = "./index.php";
      </script>
    <?php
    }
  
    ?>
  </div>
</body>

</html>