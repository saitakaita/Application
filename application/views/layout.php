<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php if(isset($title)): echo $this->escape($title). '-'; endif; ?>CMS</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<div id="header">
  <h1><a href="<?php echo $base_url; ?>/">CMS</a></h1>
</div>
<div id="nav">
  <p>
    <?php if ($session->isAuthenticated()): ?>
    <a href="<?php echo $base_url; ?>/">ホーム</a>
    <a href="<?php echo $base_url; ?>/account">アカウント</a>
    <?php else: ?>
    <a href="<?php echo $base_url; ?>/account/signin">ログイン</a>
    <a href="<?php echo $base_url; ?>/account/signup">アカウント登録</a>
    <?php endif; ?>
  </p>
</div>

<div id="main">
  <?php echo $_content; ?>
</div>


</body>
</html>


