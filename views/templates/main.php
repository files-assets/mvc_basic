<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (isset($page_title) && !empty($page_title)): ?>
    <title><?php echo $page_title . NAME; ?></title>
  <?php else: ?>
    <title><?php echo NAME; ?></title>
  <?php endif; ?>

  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/default.ico" />

  <!-- BEGIN Styles -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendor/fontawesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.min.css" />
  <!-- END Styles -->
</head>
<body>
  <?php $this->renderInTemplate($name, $data); ?>

  <!-- BEGIN JavaScript's -->
  <script src="<?php echo BASE_URL; ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
  <?php if (isset($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
      <script src="<?php echo BASE_URL . $script; ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>
  <!-- END JavaScript's -->
</body>
</html>
