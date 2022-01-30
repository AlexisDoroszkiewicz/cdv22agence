<?php

$filename = $_GET["i1"] . $_GET["i2"] . $_GET["i3"] . $_GET["i4"] . $_GET["i5"] . $_GET["i6"] .$_GET["i7"] . $_GET["i8"] . $_GET["i9"] . $_GET["i10"];

$fullfilename = $filename . 'v01.jpg';

$saveto = './screenshot/' . $fullfilename;

if(!file_exists($saveto)){
    $data = $_POST['dataUrl'];

    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);
    file_put_contents($saveto, $data);
}

// encode URL else facebook goes full troll and ignores params
$url = urlencode($_SERVER['QUERY_STRING'])

?>

<!DOCTYPE html>
<html lang="fr" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Make it Rock! - By Seenk">
    <meta property="og:description" content="Pour 2022 faites vos vœux !">
    <meta property="og:image" content="<?= 'https://2022.seenk.com/screenshot/' . $fullfilename?>">
    <meta property="twitter:image" content="<?= 'https://2022.seenk.com/screenshot/' . $fullfilename?>">
    <meta property="og:url" content="https://2022.seenk.com/result.php?<?= $url?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/share.css" />
    <link rel="stylesheet" href="./styles/result.css" />
    <script defer src="./scripts/share.js"></script>
    <title>Make it Rock! - By Seenk</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.png">
</head>
<body>
<div class="flexcontainer">
      <main>
          <p class="board">
            En
            <span class="blank" id="blank1">
              <img src='./Assets/Stickers/<?=$_GET["i1"]?>.png' alt="<?=$_GET["i1"]?>">
            </span>
            , on espère le
            <span class="blank" id="blank2">
              <img src='./Assets/Stickers/<?=$_GET["i2"]?>.png' alt="<?=$_GET["i2"]?>">
            </span>
            !<br />
            Que le
            <span class="blank" id="blank3">
              <img src='./Assets/Stickers/<?=$_GET["i3"]?>.png' alt="<?=$_GET["i3"]?>">
            </span>
            sera là.<br />
            Que l'on pourra faire tomber les masques et être
            <span class="blank" id="blank4">
              <img src='./Assets/Stickers/<?=$_GET["i4"]?>.png' alt="<?=$_GET["i4"]?>">
            </span>
            .<br />
            Parce qu'il est temps de rallumer la flamme du
            <span class="blank" id="blank5">
              <img src='./Assets/Stickers/<?=$_GET["i5"]?>.png' alt="<?=$_GET["i5"]?>">
            </span>
            .<br />
            <span class="blank" id="blank6">
              <img src='./Assets/Stickers/<?=$_GET["i6"]?>.png' alt="<?=$_GET["i6"]?>">
            </span>
            ! Cette année, c'est décidé, on veut du
            <span class="blank" id="blank7">
              <img src='./Assets/Stickers/<?=$_GET["i7"]?>.png' alt="<?=$_GET["i7"]?>">
            </span>
            , du
            <span class="blank" id="blank8">
              <img src='./Assets/Stickers/<?=$_GET["i8"]?>.png' alt="<?=$_GET["i8"]?>">
            </span>
            et du
              <span class="blank" id="blank9">
            <img src='./Assets/Stickers/<?=$_GET["i9"]?>.png' alt="<?=$_GET["i9"]?>">
            </span>
            !<br />
            Alors pour 2022...<br />
            <span class="blank" id="blank10">
              <img src='./Assets/Stickers/<?=$_GET["i10"]?>.png' alt="<?=$_GET["i10"]?>">
            </span>
            <img id='firefixed' src="./assets/stickers/fire.png">
          </p>

          <div class="column">
            <header>
                <a href="/"><img src="./assets/stickers/rock.png" alt="Make it Rock!"></a>
                <h1>Make it Rock!</h1>
                <h2>Pour 2022 faites vos vœux !</h2>
            </header>
            
            <a href="index.html">
                <button>Je fais mes vœux !</button>
            </a>
            
            <footer>
                <a href="https://seenk.com/" target="_blank">
                    <img src="./Assets/brand.svg" alt="Seenk logo" />
                </a>
            </footer>
          </div>
        </main>
     
        <img id='gofixed' src="./assets/stickers/go.png">
        
    </div>

</body>
</html>