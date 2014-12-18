<!DOCTYPE html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php if($is_front): ?>
  <meta name="keywords" content="李腾|李腾博客|drupal个人博客|大气企业网站制作">
  <meta name="description" content="网站是我自己设计和制作的,本人是web前端开发工程师,热衷于简洁设计,熟悉html+css+js+ps,能独立完成各种网站，博客用于记录我的工作和生活。">
  <?php endif ?>
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>