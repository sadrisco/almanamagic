<?php
    require_once "cards.php";
    if(isset($_GET['id'])){
        $card=new Card();
        $card->setId($_GET['id']);
        if($card->delete()){
            ?>
			<script>
			   window.alert("Card deleted from favorites");
			   window.location.href="./list.php";
			</script>
			<?php
		}else{
					?>
			<script>
			   window.alert("Error");
			   window.location.href="./list.php";
			</script>
			<?php
		
        }
    }
?>