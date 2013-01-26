<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php if(isset($title)): echo $this->escape($title). '-'; endif; ?>CMS</title>
</head>
<body>
<div id="header">
  <h1><a href="<?php echo $base_url; ?>/">CMS</a></h1>
</div>

<div id="main">
  <?php echo $_content; ?>
</div>


</body>
</html>


