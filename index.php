<?php require_once './_config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/main.css"/>
</head>
<body>

<h1>oreore instagram</h1>

<?php if ($isLoggedIn): ?>
  <h2>Favorites feed</h2>
  <?php $instagrams = require('./instagram-accounts.php'); ?>
  <ul id="insta-list" style="display:none;">
    <?php foreach ($instagrams as $insta): ?>
    <li><?=$insta['id']?></li>
    <?php endforeach;?>
  </ul>
  <div id="favorites-feed">
  <ul>
    <?php foreach ($instagrams as $insta): ?>
      <li><a href="<?=$insta['url']?>"><?=$insta['url']?></a></li>
    <?php endforeach;?>
  </ul>
  </div>
  <h2>My feed</h2>
  <div id="my-feed"></div>
  <a href="/logout.php">Log out</a>
<?php else: ?>
  <a href="/login.php">Login with Instagram</a>
<?php endif;?>

<script src="main.js"></script>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
</body>
</html>
