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

  <!-- JavaScripts que precisam ter escopo global -->
  <script src="<?php echo BASE_URL; ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/vendor/bootstrap/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/vendor/bootstrap/bootstrap.min.js"></script>

  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/default.ico" />

  <?php if (isset($styles)): ?>
    <?php foreach ($styles as $style): ?>
      <link rel="stylesheet" href="<?php echo BASE_URL . $style; ?>" />
    <?php endforeach; ?>
  <?php endif; ?>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendor/fontawesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendor/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.css" />
</head>
<body>
  <header class="page-header">
    <?php require 'mainmenu.php'; ?>
  </header>

  <main class="page-content">
    <section class="content">
      <?php $this->loadViewInTemplate ($name, $data); ?>
    </section>
  </main>

  <footer class="page-footer">
    <?php require 'footer.php'; ?>
  </footer>

  <!-- JavaScripts -->
  <script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
  <?php if (isset($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
      <script src="<?php echo BASE_URL . $script; ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>
