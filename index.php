<?php

$instagrams = [
    "https://www.instagram.com/nanjolno/",
    "https://www.instagram.com/mogatanpe/",
    "https://www.instagram.com/rippialoha/",
    "https://www.instagram.com/shi_ka_co/",
    "https://www.instagram.com/karin_ogino/",
    "https://www.instagram.com/0kyon3/",
    "https://www.instagram.com/kusudaaina/",
    "https://www.instagram.com/mayn1021/"
];

?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<h1>oreore instagram</h1>
<p>Please click links.</p>

<ul>
  <?php foreach ($instagrams as $insta): ?>
    <li><a href="<?=$insta?>" target="_blank"><?=$insta?></a></li>
  <?php endforeach; ?>
</ul>

</body>
</html>
