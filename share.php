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
$urlParam = urlencode($_SERVER['QUERY_STRING']);
$fullURL = 'https://2022.seenk.com/result.php?' . $urlParam;
$urlNoEncode = 'https://2022.seenk.com/result.php?' . $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="fr">
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
    <script defer src="./scripts/share.js"></script>
    <title>Make it Rock! - By Seenk</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.png">
</head>
<body>
<div class="flexcontainer">
      <section class="card">
        <div class="token" data-number="3" style="--rotate: 14deg"></div>
        <div class="card-text">
          <h2>Partagez vos vœux de 2022</h2>
          <p>Montrez à tout le monde ce que vous souhaitez pour cette nouvelle année ! </p>
        </div>
      </section>
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
          </p>

          <div class="column">
              <header>
                  <a href="/"><img src="./assets/stickers/rock.png" alt="Make it Rock!"></a>
                  <h1>Make it Rock!</h1>
                  <h2>Pour 2022 faites vos vœux !</h2>
              </header>
            <div class="social">
              <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?= $fullURL?>">
                <div>
                      <svg  viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_d_103_1400)">
                      <path d="M32.0444 1L37.354 6.06473L44.2646 3.59748L47.0552 10.3839L54.3718 10.9408L54.1608 18.2756L60.6184 21.7602L57.4423 28.375L61.9243 34.1849L56.3323 38.9361L58.0637 46.0667L51.0227 48.1326L49.7041 55.3509L42.4316 54.3744L38.291 60.4323L32.0444 56.5822L25.7979 60.4323L21.6573 54.3744L14.3848 55.3509L13.0662 48.1326L6.02519 46.0667L7.75658 38.9361L2.16459 34.1849L6.64657 28.375L3.47048 21.7602L9.92808 18.2756L9.71707 10.9408L17.0337 10.3839L19.8243 3.59748L26.7348 6.06473L32.0444 1Z" fill="white"/>
                      </g>
                      <path class="inner" d="M36.0793 10.4833L36.3585 10.7495L36.7218 10.6198L41.9732 8.74495L44.0937 13.902L44.2404 14.2588L44.6251 14.2881L50.185 14.7112L50.0247 20.2849L50.0136 20.6706L50.3531 20.8538L55.2603 23.5018L52.8467 28.5284L52.6798 28.8762L52.9154 29.1816L56.3213 33.5966L52.0719 37.207L51.7779 37.4568L51.8689 37.8317L53.1846 43.2502L47.8341 44.8201L47.464 44.9287L47.3946 45.3082L46.3926 50.7935L40.8662 50.0514L40.4839 50.0001L40.2662 50.3186L37.1197 54.9221L32.3729 51.9963L32.0445 51.7939L31.7161 51.9963L26.9693 54.9221L23.8229 50.3186L23.6052 50.0001L23.2228 50.0514L17.6964 50.7935L16.6944 45.3082L16.6251 44.9287L16.2549 44.8201L10.9044 43.2502L12.2201 37.8317L12.3112 37.4568L12.0172 37.207L7.76779 33.5966L11.1737 29.1816L11.4093 28.8762L11.2423 28.5284L8.8288 23.5018L13.7359 20.8538L14.0755 20.6706L14.0644 20.2849L13.904 14.7112L19.464 14.2881L19.8486 14.2588L19.9954 13.902L22.1159 8.74495L27.3673 10.6198L27.7306 10.7495L28.0097 10.4833L32.0445 6.63455L36.0793 10.4833Z" fill="#244386" stroke="black" stroke-width="1.25185"/>
                      <path d="M28.6951 28.6402L26.4049 29.2243L27.1838 32.2779L29.474 31.6938L31.8107 40.8545L35.6277 39.8809L33.291 30.7201L36.0392 30.0191L35.5657 26.8877L32.5121 27.6666L32.1811 26.3688C32.0058 25.6817 32.0806 25.3374 32.7677 25.1622L34.9815 24.5975L34.0079 20.7805L31.107 21.5205C28.3588 22.2215 27.4489 23.7545 28.0331 26.0446L28.6951 28.6402Z" fill="white"/>
                      <defs>
                      <filter id="filter0_d_103_1400" x="0.912699" y="0.374074" width="64.7672" height="64.439" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dx="1.25185" dy="1.87778"/>
                      <feGaussianBlur stdDeviation="1.25185"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_103_1400"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_103_1400" result="shape"/>
                      </filter>
                      </defs>
                      </svg>
                  <p>Facebook</p>
                </div>
              </a>
              <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= $fullURL?>">
                <div>
                      <svg  viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_d_103_1406)">
                      <path d="M31.522 1L36.8316 6.06473L43.7422 3.59748L46.5327 10.3839L53.8494 10.9408L53.6383 18.2756L60.0959 21.7602L56.9199 28.375L61.4018 34.1849L55.8099 38.9361L57.5412 46.0667L50.5003 48.1326L49.1817 55.3509L41.9091 54.3744L37.7686 60.4323L31.522 56.5822L25.2754 60.4323L21.1348 54.3744L13.8623 55.3509L12.5437 48.1326L5.50273 46.0667L7.23412 38.9361L1.64213 34.1849L6.12411 28.375L2.94802 21.7602L9.40562 18.2756L9.19461 10.9408L16.5113 10.3839L19.3018 3.59748L26.2124 6.06473L31.522 1Z" fill="white"/>
                      </g>
                      <path class="inner" d="M35.5568 10.4833L35.836 10.7495L36.1993 10.6198L41.4507 8.74495L43.5712 13.902L43.718 14.2588L44.1026 14.2881L49.6626 14.7112L49.5022 20.2849L49.4911 20.6706L49.8307 20.8538L54.7378 23.5018L52.3243 28.5284L52.1573 28.8762L52.3929 29.1816L55.7988 33.5966L51.5494 37.207L51.2554 37.4568L51.3465 37.8317L52.6621 43.2502L47.3117 44.8201L46.9415 44.9287L46.8722 45.3082L45.8702 50.7935L40.3438 50.0514L39.9614 50.0001L39.7437 50.3186L36.5973 54.9221L31.8505 51.9963L31.5221 51.7939L31.1936 51.9963L26.4468 54.9221L23.3004 50.3186L23.0827 50.0001L22.7004 50.0514L17.174 50.7935L16.172 45.3082L16.1026 44.9287L15.7324 44.8201L10.382 43.2502L11.6977 37.8317L11.7887 37.4568L11.4947 37.207L7.24533 33.5966L10.6512 29.1816L10.8868 28.8762L10.7199 28.5284L8.30634 23.5018L13.2135 20.8538L13.553 20.6706L13.5419 20.2849L13.3816 14.7112L18.9415 14.2881L19.3262 14.2588L19.4729 13.902L21.5934 8.74495L26.8448 10.6198L27.2081 10.7495L27.4873 10.4833L31.5221 6.63455L35.5568 10.4833Z" fill="#244386" stroke="black" stroke-width="1.25185"/>
                      <path d="M27.0882 24.7886C27.0283 25.7156 26.2614 26.3974 25.3453 26.3382C24.4292 26.279 23.7565 25.5042 23.8164 24.5772C23.8763 23.6502 24.6431 22.9684 25.5593 23.0276C26.4754 23.0868 27.1481 23.8617 27.0882 24.7886ZM26.8957 27.7682L23.6238 27.5568L22.9392 38.1508L26.211 38.3622L26.8957 27.7682ZM32.1306 28.1065L28.8588 27.8951L28.1741 38.4891L31.446 38.7005L31.8054 33.1387C32.0065 30.0267 35.9498 30.0155 35.7316 33.3924L35.3722 38.9542L38.644 39.1657L39.0762 32.4782C39.4142 27.2474 33.5775 27.0697 32.0365 29.5632L32.1306 28.1065Z" fill="white"/>
                      <defs>
                      <filter id="filter0_d_103_1406" x="0.390238" y="0.374074" width="64.7672" height="64.439" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dx="1.25185" dy="1.87778"/>
                      <feGaussianBlur stdDeviation="1.25185"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_103_1406"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_103_1406" result="shape"/>
                      </filter>
                      </defs>
                      </svg>
                  <p>Linkedin</p>
                </div>
              </a>
              <a target="_blank" href="https://twitter.com/intent/tweet?url=<?= $fullURL?>">
                <div>
                <svg  viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_d_103_1412)">
                      <path d="M32 1L37.3096 6.06473L44.2202 3.59748L47.0107 10.3839L54.3274 10.9408L54.1164 18.2756L60.574 21.7602L57.3979 28.375L61.8799 34.1849L56.2879 38.9361L58.0193 46.0667L50.9783 48.1326L49.6597 55.3509L42.3872 54.3744L38.2466 60.4323L32 56.5822L25.7534 60.4323L21.6129 54.3744L14.3403 55.3509L13.0217 48.1326L5.98076 46.0667L7.71214 38.9361L2.12015 34.1849L6.60213 28.375L3.42605 21.7602L9.88365 18.2756L9.67264 10.9408L16.9893 10.3839L19.7798 3.59748L26.6904 6.06473L32 1Z" fill="white"/>
                      </g>
                      <path class="inner" d="M36.0349 10.4833L36.314 10.7495L36.6774 10.6198L41.9287 8.74495L44.0493 13.902L44.196 14.2588L44.5807 14.2881L50.1406 14.7112L49.9803 20.2849L49.9692 20.6706L50.3087 20.8538L55.2158 23.5018L52.8023 28.5284L52.6353 28.8762L52.871 29.1816L56.2768 33.5966L52.0275 37.207L51.7335 37.4568L51.8245 37.8317L53.1402 43.2502L47.7897 44.8201L47.4195 44.9287L47.3502 45.3082L46.3482 50.7935L40.8218 50.0514L40.4394 50.0001L40.2217 50.3186L37.0753 54.9221L32.3285 51.9963L32.0001 51.7939L31.6717 51.9963L26.9249 54.9221L23.7785 50.3186L23.5608 50.0001L23.1784 50.0514L17.652 50.7935L16.65 45.3082L16.5807 44.9287L16.2105 44.8201L10.86 43.2502L12.1757 37.8317L12.2667 37.4568L11.9727 37.207L7.72335 33.5966L11.1292 29.1816L11.3649 28.8762L11.1979 28.5284L8.78436 23.5018L13.6915 20.8538L14.031 20.6706L14.0199 20.2849L13.8596 14.7112L19.4195 14.2881L19.8042 14.2588L19.9509 13.902L22.0715 8.74495L27.3228 10.6198L27.6862 10.7495L27.9653 10.4833L32.0001 6.63455L36.0349 10.4833Z" fill="#244386" stroke="black" stroke-width="1.25185"/>
                      <path d="M27.6942 36.4981C33.7096 38.6166 38.759 34.7787 40.2849 30.4461C40.3349 30.3041 40.3817 30.1619 40.4247 30.0189C41.2262 29.781 41.9848 29.3989 42.6541 28.8958C41.9762 28.9504 41.2838 28.9041 40.5943 28.7504C41.4124 28.5823 42.1572 28.1225 42.6714 27.4431C41.907 27.5962 41.1111 27.6228 40.3144 27.5077C39.9419 26.6602 39.2323 25.9622 38.2919 25.631C36.4856 24.9949 34.5038 25.9475 33.8663 27.7575C33.7757 28.0149 33.7164 28.2752 33.6877 28.535C31.018 27.4409 29.0674 25.2872 28.1532 22.7354C27.7014 23.1208 27.3412 23.6269 27.1298 24.2272C26.7292 25.3647 26.9529 26.5723 27.624 27.4692C27.0934 27.2637 26.6415 26.9383 26.2873 26.5373C26.2817 26.5507 26.2769 26.5645 26.2718 26.5789C25.7125 28.1669 26.3731 29.8898 27.7635 30.7172C27.4624 30.6956 27.1592 30.6342 26.8608 30.5291C26.6501 30.4549 26.4527 30.3616 26.2668 30.2535C26.2244 31.7026 27.0979 33.0759 28.52 33.6068C27.0908 34.0921 25.4961 34.1195 23.9639 33.5799C23.7001 33.487 23.4451 33.3802 23.1998 33.2597C24.3196 34.6993 25.8469 35.8475 27.6942 36.4981Z" fill="white"/>
                      <defs>
                      <filter id="filter0_d_103_1412" x="0.868265" y="0.374074" width="64.7672" height="64.439" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dx="1.25185" dy="1.87778"/>
                      <feGaussianBlur stdDeviation="1.25185"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_103_1412"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_103_1412" result="shape"/>
                      </filter>
                      </defs>
                      </svg>
                  <p>Twitter</p>
                </div>
              </a>
              <?php 
                    $subject = "J'ai fait mes vœux pour 2022 !";
                    $body = "Hello, \n\n Une façon ludique de générer des vœux pour une année qui rock !\n\n".$urlNoEncode."\n\nÀ toi de jouer :)";
                ?>
              <a target="_blank" href="mailto:?subject=<?= rawurlencode($subject) ?>&body=<?= rawurlencode($body) ?>">
                <div>
                <svg  viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_d_103_1418)">
                      <path d="M31.478 1L36.7876 6.06473L43.6982 3.59748L46.4888 10.3839L53.8054 10.9408L53.5944 18.2756L60.052 21.7602L56.8759 28.375L61.3579 34.1849L55.7659 38.9361L57.4973 46.0667L50.4563 48.1326L49.1377 55.3509L41.8652 54.3744L37.7246 60.4323L31.478 56.5822L25.2314 60.4323L21.0909 54.3744L13.8184 55.3509L12.4998 48.1326L5.45879 46.0667L7.19017 38.9361L1.59818 34.1849L6.08016 28.375L2.90407 21.7602L9.36168 18.2756L9.15067 10.9408L16.4673 10.3839L19.2579 3.59748L26.1684 6.06473L31.478 1Z" fill="white"/>
                      </g>
                      <path class="inner" d="M35.5129 10.4833L35.7921 10.7495L36.1554 10.6198L41.4067 8.74495L43.5273 13.902L43.674 14.2588L44.0587 14.2881L49.6186 14.7112L49.4583 20.2849L49.4472 20.6706L49.7867 20.8538L54.6938 23.5018L52.2803 28.5284L52.1133 28.8762L52.349 29.1816L55.7549 33.5966L51.5055 37.207L51.2115 37.4568L51.3025 37.8317L52.6182 43.2502L47.2677 44.8201L46.8976 44.9287L46.8282 45.3082L45.8262 50.7935L40.2998 50.0514L39.9175 50.0001L39.6998 50.3186L36.5533 54.9221L31.8065 51.9963L31.4781 51.7939L31.1497 51.9963L26.4029 54.9221L23.2565 50.3186L23.0388 50.0001L22.6564 50.0514L17.13 50.7935L16.128 45.3082L16.0587 44.9287L15.6885 44.8201L10.338 43.2502L11.6537 37.8317L11.7448 37.4568L11.4507 37.207L7.20138 33.5966L10.6072 29.1816L10.8429 28.8762L10.6759 28.5284L8.26239 23.5018L13.1695 20.8538L13.5091 20.6706L13.498 20.2849L13.3376 14.7112L18.8975 14.2881L19.2822 14.2588L19.4289 13.902L21.5495 8.74495L26.8009 10.6198L27.1642 10.7495L27.4433 10.4833L31.4781 6.63455L35.5129 10.4833Z" fill="#244386" stroke="black" stroke-width="1.25185"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0448 23.8537L36.6923 22.1124C37.0694 22.0605 37.3948 22.0156 37.6659 22.0012C37.952 21.9859 38.2405 21.9994 38.5307 22.1034C38.9636 22.2586 39.3383 22.5497 39.601 22.935C39.7771 23.1933 39.8678 23.4745 39.9308 23.761C39.9905 24.0325 40.0364 24.3657 40.0895 24.752L41.4695 34.7749C41.5227 35.1612 41.5686 35.4944 41.5845 35.7719C41.6013 36.0648 41.5899 36.36 41.4902 36.6563C41.3413 37.0983 41.0593 37.4798 40.6844 37.7462C40.4332 37.9247 40.159 38.0157 39.8794 38.0784C39.6145 38.1377 39.2892 38.1825 38.912 38.2344L26.2645 39.9757C25.8873 40.0277 25.562 40.0725 25.2909 40.0869C25.0048 40.1022 24.7163 40.0887 24.4261 39.9847C23.9932 39.8295 23.6185 39.5384 23.3558 39.1531C23.1797 38.8948 23.089 38.6136 23.026 38.3271C22.9663 38.0556 22.9204 37.7224 22.8672 37.3361L21.4873 27.3133C21.4341 26.927 21.3882 26.5937 21.3723 26.3162C21.3555 26.0233 21.3668 25.7281 21.4666 25.4318C21.6154 24.9898 21.8975 24.6083 22.2723 24.3419C22.5236 24.1634 22.7977 24.0724 23.0773 24.0098C23.3423 23.9504 23.6676 23.9056 24.0448 23.8537ZM23.395 25.4545C23.2029 25.4975 23.1346 25.535 23.1018 25.5584C22.9768 25.6472 22.8828 25.7743 22.8332 25.9217C22.8202 25.9604 22.8034 26.0379 22.8149 26.2392C22.8269 26.4491 22.8639 26.722 22.9221 27.1445L24.2943 37.1108C24.3525 37.5333 24.3906 37.806 24.4357 38.0114C24.479 38.2083 24.5161 38.2784 24.5391 38.3121C24.6267 38.4406 24.7516 38.5376 24.8959 38.5893C24.9338 38.6029 25.0097 38.6206 25.2063 38.6101C25.4114 38.5992 25.6778 38.5631 26.0903 38.5063L38.6826 36.7725C39.0951 36.7157 39.3614 36.6785 39.5618 36.6336C39.7539 36.5906 39.8222 36.5531 39.855 36.5297C39.98 36.4409 40.074 36.3138 40.1236 36.1664C40.1366 36.1277 40.1534 36.0502 40.1419 35.8489C40.1299 35.639 40.0929 35.3661 40.0347 34.9436L38.6625 24.9773C38.6043 24.5548 38.5662 24.2821 38.5211 24.0767C38.4778 23.8798 38.4406 23.8097 38.4176 23.776C38.33 23.6475 38.2052 23.5505 38.0609 23.4988C38.0229 23.4852 37.9471 23.4675 37.7505 23.478C37.5454 23.4889 37.279 23.525 36.8665 23.5818L24.2742 25.3156C23.8617 25.3724 23.5954 25.4096 23.395 25.4545Z" fill="white"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5443 27.0268C24.7626 26.6864 25.2104 26.5933 25.5444 26.8188L31.4452 30.8031L36.0497 25.3725C36.3104 25.065 36.7667 25.0336 37.0688 25.3024C37.3709 25.5711 37.4045 26.0383 37.1439 26.3457L31.7134 32.7506L24.754 28.0516C24.4199 27.826 24.3261 27.3672 24.5443 27.0268Z" fill="white"/>
                      <defs>
                      <filter id="filter0_d_103_1418" x="0.346293" y="0.374074" width="64.7672" height="64.439" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dx="1.25185" dy="1.87778"/>
                      <feGaussianBlur stdDeviation="1.25185"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_103_1418"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_103_1418" result="shape"/>
                      </filter>
                      </defs>
                      </svg>
                  <p>Mail</p>
                </div>
              </a>
              <a href="<?= '/screenshot/' . $fullfilename?>" target="_blank" rel="nofollow noopener" download="Seenk2022">
                <div>
                <svg viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_d_103_1424)">
                      <path d="M31.9556 1L37.2652 6.06473L44.1758 3.59748L46.9663 10.3839L54.283 10.9408L54.0719 18.2756L60.5295 21.7602L57.3535 28.375L61.8354 34.1849L56.2434 38.9361L57.9748 46.0667L50.9338 48.1326L49.6153 55.3509L42.3427 54.3744L38.2022 60.4323L31.9556 56.5822L25.709 60.4323L21.5684 54.3744L14.2959 55.3509L12.9773 48.1326L5.93633 46.0667L7.66771 38.9361L2.07572 34.1849L6.5577 28.375L3.38161 21.7602L9.83921 18.2756L9.6282 10.9408L16.9448 10.3839L19.7354 3.59748L26.646 6.06473L31.9556 1Z" fill="white"/>
                      </g>
                      <path class="inner" d="M35.9904 10.4833L36.2696 10.7495L36.6329 10.6198L41.8843 8.74495L44.0048 13.902L44.1516 14.2588L44.5362 14.2881L50.0962 14.7112L49.9358 20.2849L49.9247 20.6706L50.2642 20.8538L55.1714 23.5018L52.7579 28.5284L52.5909 28.8762L52.8265 29.1816L56.2324 33.5966L51.983 37.207L51.689 37.4568L51.7801 37.8317L53.0957 43.2502L47.7453 44.8201L47.3751 44.9287L47.3058 45.3082L46.3038 50.7935L40.7774 50.0514L40.395 50.0001L40.1773 50.3186L37.0309 54.9221L32.2841 51.9963L31.9557 51.7939L31.6272 51.9963L26.8804 54.9221L23.734 50.3186L23.5163 50.0001L23.134 50.0514L17.6075 50.7935L16.6056 45.3082L16.5362 44.9287L16.166 44.8201L10.8156 43.2502L12.1313 37.8317L12.2223 37.4568L11.9283 37.207L7.67892 33.5966L11.0848 29.1816L11.3204 28.8762L11.1534 28.5284L8.73993 23.5018L13.6471 20.8538L13.9866 20.6706L13.9755 20.2849L13.8152 14.7112L19.3751 14.2881L19.7598 14.2588L19.9065 13.902L22.027 8.74495L27.2784 10.6198L27.6417 10.7495L27.9209 10.4833L31.9557 6.63455L35.9904 10.4833Z" fill="#244386" stroke="black" stroke-width="1.25185"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9399 28.3182C26.2407 28.0395 26.7104 28.0573 26.9892 28.358L31.9125 33.67L37.831 29.4953C38.1661 29.259 38.6293 29.339 38.8657 29.6741C39.102 30.0091 39.022 30.4724 38.6869 30.7087L31.7067 35.6323L25.9001 29.3674C25.6214 29.0667 25.6392 28.5969 25.9399 28.3182Z" fill="white"/>
                      <line x1="33.1169" y1="23.1216" x2="32.0313" y2="33.4707" stroke="white" stroke-width="1.57567" stroke-linecap="round"/>
                      <line x1="25.0855" y1="37.8377" x2="37.7261" y2="39.1637" stroke="white" stroke-width="1.57567" stroke-linecap="round"/>
                      <defs>
                      <filter id="filter0_d_103_1424" x="0.823832" y="0.374074" width="64.7672" height="64.439" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dx="1.25185" dy="1.87778"/>
                      <feGaussianBlur stdDeviation="1.25185"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_103_1424"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_103_1424" result="shape"/>
                      </filter>
                      </defs>
                      </svg>
                  <p>Image</p>
                </div>
              </a>
            </div>    
          </div>
        </main>
     
        <footer>
          <a href="https://seenk.com/" target="_blank">
            <img src="./Assets/brand.svg" alt="Seenk logo" />
          </a>
          <img id='gofixed' src="./assets/stickers/go.png">
        </footer>
        <img id='heartfixed' src="./assets/stickers/heart.png">
    </div>

</body>
</html>