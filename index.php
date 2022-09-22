<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="search-form">
      <form action="" method="post" class="search">
        <input
          id="search-input"
          placeholder="Digite aqui o nome da carta"
          name="card-name"
          type="search"
        />
        <button type="submit" class="search-button" value="submit">
          <img src="./asset/search.svg" />
        </button>
      </form>
    </div>

      </script>

<?php
// leitura recomendada: https://rapidapi.com/blog/how-to-use-an-api-with-php/

//our API endpoint

$endpoint = ['cards/search'];
$url = 'https://api.scryfall.com/' . $endpoint;

//search term
$term = $_POST['card-name'] ;

//defines the fetch URL
$request_url = $url . '?q=' . $term;

//initializes the curl library for php
$curl = curl_init($request_url);

//the request header
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [

  'Content-Type: application/json'
]);

$response = curl_exec($curl);
curl_close($curl);
echo $response . PHP_EOL;

?>
</html>