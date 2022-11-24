
  <?php
  require_once 'user.php';
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
      $user = new User();
      $user->setName($_POST['name']);
      $user->setEmail($_POST['email']);
      $user->setPassword(md5($_POST['password']));
      $authentication = $user->validate();
      echo $authentication;
      if($authentication <= ""){
      if ($user->insertUser()) {
  ?>
        <script>
          window.alert("User created");
          window.location.href = "./login.php";
        </script>
      <?php
      } 
    } else {
        ?>
        <script>
          window.alert("User already registered");
          window.location.href = "./create-account.php";
        </script>
      <?php
      
      }
    }
?>
  <html>
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
        <a href="/almanamagic/html-pages/logout"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
      </div>
    </div>
  </footer>
  <header>
    <img class="app-logo app-logo-margin-top" src="./asset/logo.png" style="padding-top: 5%;" />
  </header>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous" />
  </head>

  <body>   
    <div class="search-form">
      <h1 class="yellow-text centered">Criar conta</h1>
      <form action="create-account.php" method="POST" class="form">
        <input type="name" name="name" placeholder="Nome" required/><br /><br />
        <input type="email" name="email" placeholder="E-mail" required/><br /><br />
        <input type="password" name="password" placeholder="Senha" required/><br /><br />
        <input class="login-button" type="submit" value="Criar" />
      </form>

    </div>

  </body>

  </html>