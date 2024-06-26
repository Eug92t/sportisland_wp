<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,800,900&display=swap&subset=cyrillic" rel="preload stylesheet">
    <?php wp_head(); ?>
</head>
<!-- Add a class to the body tag for internal pages -->
<?php 
$body_class = '';
if( !is_front_page() ) {
    $body_class = 'inner';
}
?>
<body class = '<?php echo $body_class; ?>'>
  <header class="main-header">
    <div class="wrapper main-header__wrap">
      <?php the_custom_logo()?>
      <?php wp_nav_menu([
        'theme_location' => 'menu-header',
        'container' => 'nav',
        'container_class' => 'main-navigation',
        'menu_class' => 'main-navigation__list',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
      ]);
      ?>
      <!-- <address class="main-header__widget widget-contacts">
        <a href="tel:88007003030" class="widget-contacts__phone"> 8 800 700 30 30 </a>
        <p class="widget-contacts__address"> ул. Приречная 11 </p>
      </address> -->
      <?php 
      if ( is_active_sidebar('si-header')) {
        dynamic_sidebar('si-header');
      }
      ?>
      <button class="main-header__mobile">
        <span class="sr-only">Открыть мобильное меню</span>
      </button>
    </div>
  </header>
</body>
</html>