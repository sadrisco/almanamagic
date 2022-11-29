<?php
session_start();
if((isset ($_SESSION['user'])))
{
session_destroy();
    ?>
      <script>
        window.alert("You are now logged out");
        window.location.href = "./index.php";
      </script>
    <?php
} else{
    ?>
    <script>
      window.alert("You are not logged");
      window.location.href = "./login.php";
    </script>
  <?php
}
?>