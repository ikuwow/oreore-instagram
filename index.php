<?php require_once './_config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="container">

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
  <a href="/logout.php" class="btn btn-secondary">Log out</a>
<?php else: ?>
  <a href="/login.php" class="btn btn-primary">Login with Instagram</a>
<?php endif;?>

<footer>
  ikuwow All rights reserved. <a href="/privacy.php">Privacy policy</a>
</footer>

</div><!-- .container -->

<script src="main.js"></script>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
